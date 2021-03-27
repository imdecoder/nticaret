<?php

    namespace App\Controllers\Backend;

    use \App\Controllers\BaseController;
    use App\Models\UserModel;
    use App\Entities\UserEntity;
    use App\Libraries\EmailTo;

    class Forgot extends BaseController
    {
        protected $validation;
        protected $session;
        protected $userModel;
        protected $userEntity;
        protected $emailTo;

        public function __construct()
        {
            $this->validation = \Config\Services::validation();
            $this->session = \Config\Services::session();
            $this->userModel = new UserModel();
            $this->userEntity = new UserEntity();
            $this->emailTo = new EmailTo();
        }

        public function index()
        {
            if ($this->request->getMethod() == 'post')
            {
                $data = [
                    'email' => $this->request->getPost('email')
                ];

                if (!$this->validation->run($data, 'forgot'))
                {
                    $this->session->setFlashdata(['errors' => $this->validation->getErrors()]);
                    return redirect()->to(route_to('admin_forgot_password'));
                }

                $user = $this->userModel->where('email', $data['email'])->first();

                if (!$user)
                {
                    $this->session->setFlashdata(['errors' => lang('Errors.text.user_not_found')]);
                    return redirect()->to(route_to('admin_forgot_password'));
                }

                $send = $this->emailTo->settings()->setUser($user)->forgotPassword()->send();

                if (!$send)
                {
                    $this->session->setFlashdata(['errors' => lang('Errors.text.email_send_faild')]);
                    return redirect()->to(route_to('admin_forgot_password'));
                }

                return view('admin/pages/verification/forgot-success');
            }

            return view('admin/pages/auth/forgot-password');
        }

        public function resetPassword()
        {
            $userID = $this->session->getTempdata('userID');

            if ($userID)
            {
                if ($this->request->getMethod() == 'post')
                {
                    $data = [
                        'password' => $this->request->getPost('password'),
                        'password2' => $this->request->getPost('password2')
                    ];

                    if (!$this->validation->run($data, 'resetPassword'))
                    {
                        $this->session->setFlashdata(['errors' => $this->validation->getErrors()]);
                        return redirect()->to(route_to('admin_reset_password'));
                    }

                    $this->userEntity->setVerifyKey();
                    $this->userEntity->setPassword($data['password']);

                    $update = $this->userModel->update($userID, $this->userEntity);

                    if (!$update)
                    {
                        $this->session->setFlashdata(['errors' => lang('Errors.text.password_update_failed')]);
                        return redirect()->to(route_to('admin_reset_password'));
                    }

                    $this->session->destroy();

                    return view('admin/pages/verification/reset-password-success');
                }

                return view('admin/pages/auth/reset-password');
            }

            return view('admin/pages/verification/reset-password-error');
        }
    }
