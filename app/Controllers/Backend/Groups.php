<?php

    namespace App\Controllers\Backend;

    use \App\Controllers\BaseController;
    use App\Models\GroupModel;
    use App\Entities\GroupEntity;

    class Groups extends BaseController
    {
        protected $groupModel;
        protected $groupEntity;

        public function __construct()
        {
            $this->groupModel = new GroupModel();
            $this->groupEntity = new GroupEntity();
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
                $this->groupEntity->setPermit(array_keys($permissions));

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

                $this->groupEntity->setSlug($title);
                $this->groupEntity->setTitle($title);
                $this->groupEntity->setPermit(array_keys($permissions));

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
    }
