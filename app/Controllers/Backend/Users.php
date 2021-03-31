<?php

    namespace App\Controllers\Backend;

    use \App\Controllers\BaseController;
    use App\Models\UserModel;
    use App\Entities\UserEntity;

    class Users extends BaseController
    {
        protected $userModel;
        protected $userEntity;

        public function __construct()
        {
            $this->userModel = new UserModel();
            $this->userEntity = new UserEntity();
        }

        public function list(string $type = null)
        {
            $data = [
                'users' => $this->userModel->paginate(10),
                'pager' => $this->userModel->pager
            ];

            return view('admin/pages/users/list', $data);
        }
    }
