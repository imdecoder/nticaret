<?php

    namespace App\Controllers\Backend;

    use \App\Controllers\BaseController;
    use App\Entities\UserEntity;
    use App\Models\UserModel;
    use App\Libraries\EmailTo;

    class Register extends BaseController
    {
        protected $userEntity;
        protected $userModel;

        public function __construct()
        {
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
                    return redirect()->back()->with('error', $this->validation->getErrors());
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
                    return redirect()->back()->with('error', $this->userModel->errors());
                }

                $email = new EmailTo();
                $user = $this->userModel->find($insert);
                $to = $email->settings()->setUser($user)->accountVerification()->send();

                if ($to)
                {
                    return redirect()->back()->with('success', lang('Success.text.register'));
                }

                return redirect()->back()->with('error', lang('Errors.text.email_send_failed'));
            }

            return view('admin/pages/auth/register');
        }
    }
