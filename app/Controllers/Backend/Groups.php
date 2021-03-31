<?php

    namespace App\Controllers\Backend;

    use \App\Controllers\BaseController;
    use App\Models\GroupModel;
    use App\Entities\GroupEntity;
    use App\Models\UserModel;

    class Groups extends BaseController
    {
        protected $groupModel;
        protected $groupEntity;
        protected $userModel;

        public function __construct()
        {
            $this->groupModel = new GroupModel();
            $this->groupEntity = new GroupEntity();
            $this->userModel = new UserModel();
        }

        public function list(string $type = null)
        {
            $search = $this->request->getGet('search');
            $data = $this->groupModel->getList($type, $search, 20);

            return view('admin/pages/groups/list', $data);
        }

        public function add()
        {
            if ($this->request->getMethod() == 'post')
            {
                $title = $this->request->getPost('title');
                $permissions = $this->request->getPost('permissions');

                $this->groupEntity->setSlug($title);
                $this->groupEntity->setTitle($title);
                $this->groupEntity->setPermit($permissions);

                $this->groupModel->insert($this->groupEntity);

                if ($this->groupModel->errors())
                {
                    return redirect()->back()->with('error', $this->groupModel->errors());
                }

                return redirect()->back()->with('success', lang('Success.text.added'));
            }

            return view('admin/pages/groups/add');
        }

        public function edit(int $id)
        {
            if ($this->request->getMethod() == 'post')
            {
                $title = $this->request->getPost('title');
                $permissions = $this->request->getPost('permissions');

                $this->groupEntity->setID($id);
                $this->groupEntity->setSlug($title);
                $this->groupEntity->setTitle($title);
                $this->groupEntity->setPermit($permissions);

                $this->groupModel->update($id, $this->groupEntity);

                if ($this->groupModel->errors())
                {
                    return redirect()->back()->with('error', $this->groupModel->errors());
                }

                return redirect()->back()->with('success', lang('Success.text.edited'));
            }

            $data = [
                'group' => $this->groupModel->find($id)
            ];

            return view('admin/pages/groups/edit', $data);
        }

        public function delete()
        {
            if ($this->request->isAJAX())
            {
                $data = $this->request->getPost('data');

                if (is_array($data))
                {
                    $adminGroup = $this->groupModel->where('slug', DEFAULT_ADMIN_GROUP)->first();

                    if (in_array($adminGroup->id, $data))
                    {
                        return $this->response->setJSON([
                            'status' => false,
                            'message' => lang('Errors.text.delete_admin_group_error')
                        ]);
                    }

                    $status = false;

                    foreach ($data as $key => $value)
                    {
                        $isUser = $this->userModel->where('group_id', $value)->first();

                        if ($isUser)
                        {
                            $status = true;
                            break;
                        }
                    }

                    if ($status)
                    {
                        return $this->response->setJSON([
                            'status' => false,
                            'message' => lang('Errors.text.delete_group_with_user')
                        ]);
                    }
                }
                else
                {
                    $group = $this->groupModel->find($data);

                    if ($group->getSlug() == DEFAULT_ADMIN_GROUP)
                    {
                        return $this->response->setJSON([
                            'status' => false,
                            'message' => lang('Errors.text.delete_admin_group_error')
                        ]);
                    }

                    $isUser = $this->userModel->where('group_id', $data)->first();

                    if ($isUser)
                    {
                        return $this->response->setJSON([
                            'status' => false,
                            'message' => lang('Errors.text.delete_group_with_user')
                        ]);
                    }
                }

                $delete = $this->groupModel->delete($data);

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
                $update = $this->groupModel->update($data, ['deleted_at' => null]);

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
                $delete = $this->groupModel->delete($data, true);

                if (!$delete)
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
