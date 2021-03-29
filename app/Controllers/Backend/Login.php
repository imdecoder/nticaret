<?php

    namespace App\Controllers\Backend;

    use \App\Controllers\BaseController;
    use App\Models\UserModel;
    use App\Entities\UserEntity;
    use App\Libraries\EmailTo;
    use CodeIgniter\I18n\Time;

    class Login extends BaseController
    {
        protected $userModel;
        protected $userEntity;
        protected $emailTo;

        public function __construct()
        {
            $this->userModel = new UserModel();
            $this->userEntity = new UserEntity();
            $this->emailTo = new EmailTo();
        }

        public function index()
        {
            if ($this->request->getMethod() == 'post')
            {
                $data = [
                    'email' => $this->request->getPost('email'),
                    'password' => $this->request->getPost('password')
                ];

                if (!$this->validation->run($data, 'login'))
                {
                    return redirect()->back()->with('error', $this->validation->getErrors());
                }

                $user = $this->userModel->where('email', $data['email'])->first();

                if (!$user)
                {
                    return redirect()->back()->with('error', lang('Errors.text.user_not_found'));
                }

                if (!$user->getPasswordVerify($data['password']))
                {
                    return redirect()->back()->with('error', lang('Errors.text.user_info_failed'));
                }

                if ($user->getStatus() == USER_PENDING)
                {
                    $this->emailTo->settings()->setUser($user)->accountVerification()->send();

                    return redirect()->back()->with('error', lang('Errors.text.user_login_pending_failed'));
                }

                if ($user->getStatus() == USER_PASSIVE)
                {
                    return redirect()->back()->with('error', lang('Errors.text.user_login_passive_failed'));
                }

                session()->set([
                    'isLogin' => true,
                    'userData' => [
                        'id' => $user->id,
                        'email' => $user->getEmail(),
                        'name' => $user->getFullName()
                    ],
                    'permissions' => [

                    ]
                ]);

                return redirect()->to(route_to('admin_dashboard'));
            }

            return view('admin/pages/auth/login', [
                'time' => new Time('now')
            ]);
        }

        public function logout()
        {
            session()->destroy();
            return redirect()->to(route_to('admin_login'));
        }
    }
