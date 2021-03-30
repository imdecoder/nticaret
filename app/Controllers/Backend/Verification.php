<?php

    namespace App\Controllers\Backend;

    use \App\Controllers\BaseController;
    use App\Models\UserModel;
    use App\Entities\UserEntity;

    class Verification extends BaseController
    {
        protected $userModel;
        protected $userEntity;

        public function __construct()
        {
            $this->userModel = new UserModel();
            $this->userEntity = new UserEntity();
        }

        public function account($token)
        {
            $decode = base64_decode($token);
            $explode = explode('.', $decode);

            if (!isset($explode[0]) || !isset($explode[1]))
            {
                return view('admin/pages/verification/account-error');
            }

            $userID = $explode[0];
            $verifyKey = $explode[1];

            $user = $this->userModel->where([
                'id' => $userID,
                'verify_key' => $verifyKey,
                'status' => STATUS_PENDING
            ])->first();

            if (!$user)
            {
                return view('admin/pages/verification/account-error');
            }

            $this->userEntity->setStatus(STATUS_ACTIVE);
            $this->userEntity->setVerifyKey();

            $update = $this->userModel->update($userID, $this->userEntity);

            if (!$update)
            {
                return view('admin/pages/verification/account-error');
            }

            return view('admin/pages/verification/account-success');
        }

        public function forgot($token)
        {
            $decode = base64_decode($token);
            $explode = explode('.', $decode);

            if (!isset($explode[0]) || !isset($explode[1]))
            {
                return view('admin/pages/verification/forgot-error');
            }

            $userID = $explode[0];
            $verifyKey = $explode[1];

            $user = $this->userModel->where([
                'id' => $userID,
                'verify_key' => $verifyKey
            ])->first();

            if (!$user)
            {
                return view('admin/pages/verification/forgot-error');
            }

            $this->userEntity->setVerifyKey();

            $update = $this->userModel->update($userID, $this->userEntity);

            if (!$update)
            {
                return view('admin/pages/verification/forgot-error');
            }

            session()->setTempdata('userID', $userID, 300);

            return redirect()->to(route_to('admin_reset_password'));
        }
    }
