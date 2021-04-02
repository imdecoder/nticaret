<?php

    namespace App\Controllers\Backend;

    use \App\Controllers\BaseController;
    use App\Models\UserModel;
    use App\Entities\UserEntity;
    use App\Models\GroupModel;

    class Users extends BaseController
    {
        protected $userModel;
        protected $userEntity;

        public function __construct()
        {
            $this->userModel = new UserModel();
            $this->userEntity = new UserEntity();
            $this->groupModel = new GroupModel();
        }

        public function list(string $status = null)
        {
            $getDateFilter = $this->request->getGet('date_filter');
            $dateFilter = explode(' - ', $getDateFilter);
            $dateFilter = count($dateFilter) > 1 ? $dateFilter : null;

            $search = $this->request->getGet('search');
            $search = !empty($search) ? $search : null;

            $perPage = $this->request->getGet('per_page');
            $perPage = !empty($perPage) ? $perPage : 20;

            $group = $this->request->getGet('group');
            $group = !empty($group) ? $group : null;

            $data = [
                'date_filter' => $getDateFilter,
                'search' => $search,
                'per_page' => $perPage,
                'groups' => $this->groupModel->findAll()
            ];

            $getModel = $this->userModel->getList($status, $search, $dateFilter, $perPage, $group);

            $data = array_merge($data, $getModel);

            return view('admin/pages/users/list', $data);
        }

        public function add()
        {
            if ($this->request->getMethod() == 'post')
            {
                $firstname = $this->request->getPost('firstname');
                $lastname = $this->request->getPost('lastname');
                $email = $this->request->getPost('email');
                $password = $this->request->getPost('password');
                $status = $this->request->getPost('status');
                $group_id = $this->request->getPost('group_id');
                $bio = $this->request->getPost('bio');

                $this->userEntity->setFirstname($firstname);
                $this->userEntity->setLastname($lastname);
                $this->userEntity->setEmail($email);
                $this->userEntity->setPassword($password);
                $this->userEntity->setStatus($status);
                $this->userEntity->setGroupID($group_id);
                $this->userEntity->setBio($bio);
                $this->userEntity->setVerifyKey();
                $this->userEntity->setVerifyCode();

                $this->userModel->save($this->userEntity);

                if ($this->userModel->errors())
                {
                    return redirect()->back()->with('error', $this->userModel->errors());
                }

                return redirect()->back()->with('success', lang('Success.text.added'));
            }

            $data = [
                'groups' => $this->groupModel->findAll()
            ];

            return view('admin/pages/users/add', $data);
        }

        public function edit(int $id)
        {
            if ($this->request->getMethod() == 'post')
            {
                $firstname = $this->request->getPost('firstname');
                $lastname = $this->request->getPost('lastname');
                $email = $this->request->getPost('email');
                $password = $this->request->getPost('password');
                $status = $this->request->getPost('status');
                $group_id = $this->request->getPost('group_id');
                $bio = $this->request->getPost('bio');

                $this->userEntity->setID($id);
                $this->userEntity->setFirstname($firstname);
                $this->userEntity->setLastname($lastname);
                $this->userEntity->setEmail($email);

                if (!empty($password))
                {
                    $this->userEntity->setPassword($password);
                }

                $this->userEntity->setStatus($status);
                $this->userEntity->setGroupID($group_id);
                $this->userEntity->setBio($bio);

                $this->userModel->update($id, $this->userEntity);

                if ($this->userModel->errors())
                {
                    return redirect()->back()->with('error', $this->userModel->errors());
                }

                return redirect()->back()->with('success', lang('Success.text.edited'));
            }

            $data = [
                'groups' => $this->groupModel->findAll(),
                'user' => $this->userModel->find($id)
            ];

            return view('admin/pages/users/edit', $data);
        }

        public function status()
        {
            if ($this->request->isAJAX())
            {
                $data = $this->request->getPost('data');
                $status = $this->request->getPost('status');

                $update = $this->userModel->update($data, ['status' => $status]);

                if (!$update)
                {
                    return $this->response->setJSON([
                        'status' => false,
                        'message' => lang('Errors.text.status_error')
                    ]);
                }

                return $this->response->setJSON([
                    'status' => true,
                    'message' => lang('Success.text.status_changed')
                ]);
            }

            return $this->response->setJSON([
                'status' => false,
                'message' => lang('Errors.text.status_error')
            ]);
        }

        public function delete()
        {
            if ($this->request->isAJAX())
            {
                $data = $this->request->getPost('data');
                $data = !is_array($data) ? [$data] : $data;

                $adminGroup = $this->groupModel->where('slug', DEFAULT_ADMIN_GROUP)->first();
                $user = $this->userModel->whereIn('id', $data)->where('group_id', $adminGroup->id)->first();

                if ($user)
                {
                    return $this->response->setJSON([
                        'status' => false,
                        'message' => lang('Errors.text.delete_admin_user_error')
                    ]);
                }

                $delete = $this->userModel->delete($data);

                if (!$delete)
                {
                    return $this->response->setJSON([
                        'status' => false,
                        'message' => lang('Errors.text.delete_error')
                    ]);
                }

                return $this->response->setJSON([
                    'status' => true,
                    'message' => lang('Success.text.deleted')
                ]);
            }

            return $this->response->setJSON([
                'status' => false,
                'message' => lang('Errors.text.delete_error')
            ]);
        }

        public function restore()
        {
            if ($this->request->isAJAX())
            {
                $data = $this->request->getPost('data');

                $update = $this->userModel->update($data, ['deleted_at' => null]);

                if (!$update)
                {
                    return $this->response->setJSON([
                        'status' => false,
                        'message' => lang('Errors.text.restore_error')
                    ]);
                }

                return $this->response->setJSON([
                    'status' => true,
                    'message' => lang('Success.text.restored')
                ]);
            }

            return $this->response->setJSON([
                'status' => false,
                'message' => lang('Errors.text.restore_error')
            ]);
        }

        public function hardDelete()
        {
            if ($this->request->isAJAX())
            {
                $data = $this->request->getPost('data');
                $hardDelete = $this->userModel->delete($data, true);

                if (!$hardDelete)
                {
                    return $this->response->setJSON([
                        'status' => false,
                        'message' => lang('Errors.text.hard_delete_error')
                    ]);
                }

                return $this->response->setJSON([
                    'status' => true,
                    'message' => lang('Success.text.hard_deleted')
                ]);
            }

            return $this->response->setJSON([
                'status' => false,
                'message' => lang('Errors.text.hard_delete_error')
            ]);
        }
    }
