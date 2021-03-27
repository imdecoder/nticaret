<?php

    namespace App\Controllers\Backend;

    use \App\Controllers\BaseController;
    use App\Entities\UserEntity;
    use App\Models\UserModel;
    use App\Libraries\EmailTo;

    class Register extends BaseController
    {
        protected $validation;
        protected $session;
        protected $userEntity;
        protected $userModel;

        public function __construct()
        {
            $this->validation = \Config\Services::validation();
            $this->session = \Config\Services::session();
            $this->userEntity = new UserEntity();
            $this->userModel = new UserModel();
        }

        public function index()
        {
            if ($this->request->getMethod() == 'post')
            {
                $data = [
                    'firstname' => $this->request->getPost('firstname'),
                    'lastname' => $this->request->getPost('lastname'),
                    'email' => $this->request->getPost('email'),
                    'password' => $this->request->getPost('password'),
                    'password2' => $this->request->getPost('password2'),
                ];

                if (!$this->validation->run($data, 'register'))
                {
                    $this->session->setFlashdata(['errors' => $this->validation->getErrors()]);

                    return redirect()->to(route_to('admin_register'));
                }

                $this->userEntity->setFirstname($data['firstname']);
                $this->userEntity->setLastname($data['lastname']);
                $this->userEntity->setEmail($data['email']);
                $this->userEntity->setVerifyKey();
                $this->userEntity->setVerifyCode();
                $this->userEntity->setStatus(USER_PENDING);
                $this->userEntity->setPassword($data['password']);

                $insert = $this->userModel->insert($this->userEntity);

                if ($this->userModel->errors())
                {
                    $this->session->setFlashdata(['errors' => $this->userModel->errors()]);
                    return redirect()->to(route_to('admin_register'));
                }

                $email = new EmailTo();
                $user = $this->userModel->find($insert);
                $to = $email->settings()->setUser($user)->accountVerification()->send();

                if ($to)
                {
                    $this->session->setFlashdata(['success' => lang('Success.text.register')]);
                    return redirect()->to(route_to('admin_register'));
                }

                $this->session->setFlashdata(['errors' => lang('Errors.text.email_send_failed')]);
                return redirect()->to(route_to('admin_register'));
            }

            return view('admin/pages/auth/register');
        }
    }
