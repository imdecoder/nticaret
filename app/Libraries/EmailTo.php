<?php

    namespace App\Libraries;

    class EmailTo
    {
        protected $email;
        protected $user;

        public function __construct()
        {
            $this->email = \Config\Services::email();
        }

        public function settings()
        {
            $this->email->initialize([
                'protocol' => 'smtp',
                'SMTPHost' => 'smtp.gmail.com',
                'SMTPUser' => 'tekoloji.com@gmail.com',
                'SMTPPass' => 'hshbE1882!',
                'SMTPPort' => '587',
                'SMTPTimeout' => '60',
                'mailType' => 'html'
            ]);

            $this->email->setFrom('tekoloji.com@gmail.com', 'Tekoloji');

            return $this;
        }

        public function setUser($user)
        {
            $this->user = $user;
            $this->email->setTo($this->user->getEmail());

            return $this;
        }

        public function accountVerification()
        {
            $this->email->setSubject('Hesabınızı Doğrulayın');
            $this->email->setMessage(view('admin/email/account-verification', ['user' => $this->user]));

            return $this;
        }

        public function accountVerificationSuccess()
        {
            $this->email->setSubject('Hesabınız Doğrulandı');
            $this->email->setMessage(view('admin/email/account-verification-success', ['user' => $this->user]));

            return $this;
        }

        public function forgotPassword()
        {
            $this->email->setSubject('Şifre Sıfırlama Talebi');
            $this->email->setMessage(view('admin/email/forgot-password', ['user' => $this->user]));

            return $this;
        }

        public function passwordChangeSuccess()
        {
            $this->email->setSubject('Şifreniz Sıfırlandı');
            $this->email->setMessage(view('admin/email/password-change-success', ['user' => $this->user]));

            return $this;
        }

        public function send()
        {
            return $this->email->send();
        }
    }
