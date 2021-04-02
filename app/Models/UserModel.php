<?php

    namespace App\Models;

    use App\Entities\UserEntity;
    use \CodeIgniter\Model;

    class UserModel extends Model
    {
        protected $table = 'users';
        protected $primaryKey = 'id';

        protected $returnType = UserEntity::class;
        protected $useSoftDeletes = true;

        protected $allowedFields = [
            'group_id',
            'firstname',
            'lastname',
            'email',
            'password',
            'verify_key',
            'verify_code',
            'bio',
            'status',
            'deleted_at'
        ];

        protected $useTimestamps = true;
        protected $createdField = 'created_at';
        protected $updatedField = 'updated_at';
        protected $deletedField = 'deleted_at';

        protected $validationRules = [
            'group_id' => 'required|numeric',
            'firstname' => 'required|string|min_length[3]',
            'lastname' => 'required|string|min_length[3]',
            'email' => 'required|valid_email|is_unique[users.email, id, {id}]',
            'password' => 'required',
            'verify_key' => 'required|alpha',
            'verify_code' => 'numeric|min_length[6]',
            'status' => 'required'
        ];

        protected $validationMessages = [
            'group_id' => [
                'required' => 'Validation.text.group_id_required',
                'numeric' => 'Validation.text.group_id_numeric'
            ],
            'firstname' => [
                'required' => 'Validation.text.firstname_required',
                'string' => 'Validation.text.firstname_string',
                'min_length' => 'Validation.text.firstname_min_length'
            ],
            'lastname' => [
                'required' => 'Validation.text.lastname_required',
                'string' => 'Validation.text.lastname_string',
                'min_length' => 'Validation.text.lastname_min_length'
            ],
            'email' => [
                'required' => 'Validation.text.email_required',
                'valid_email' => 'Validation.text.email_valid_email',
                'is_unique' => 'Validation.text.email_is_unique'
            ],
            'password' => [
                'required' => 'Validation.text.password_required'
            ],
            'verify_key' => [
                'required' => 'Validation.text.verify_key_required',
                'alpha' => 'Validation.text.verify_key_alpha'
            ],
            'verify_code' => [
                'numeric' => 'Validation.text.verify_code_numeric',
                'min_length' => 'Validation.text.verify_code_min_length'
            ],
            'status' => [
                'required' => 'Validation.text.status_required'
            ]
        ];

        public function getList(string $status = null, string $search = null, array $dateFilter = null, int $perPage = 20, int $group = null)
        {
            $builder = $this->setTable($this->table);
            $builder = $builder->select('users.*, groups.title');

            $builder = $status == 'trash' ? $builder->onlyDeleted() : $builder;
            $builder = $status == strtolower(STATUS_ACTIVE) ? $builder->where('users.status', STATUS_ACTIVE) : $builder;
            $builder = $status == strtolower(STATUS_PENDING) ? $builder->where('users.status', STATUS_PENDING) : $builder;
            $builder = $status == strtolower(STATUS_PASSIVE) ? $builder->where('users.status', STATUS_PASSIVE) : $builder;

            $builder = !is_null($group) ? $builder->where('users.group_id', $group) : $builder;

            if (!is_null($search))
            {
                $builder = $builder->groupStart();
                $builder = $builder->like('users.firstname', $search);
                $builder = $builder->orLike('users.lastname', $search);
                $builder = $builder->orLike('users.email', $search);
                $builder = $builder->groupEnd();
            }

            if (!is_null($dateFilter))
            {
                $dateStart = str_replace('/', '-', $dateFilter[0]);
                $dateStart = date('Y-m-d', strtotime($dateStart));

                $dateEnd = str_replace('/', '-', $dateFilter[1]);
                $dateEnd = date('Y-m-d', strtotime($dateEnd));

                $builder = $builder->groupStart();
                $builder = $builder->where('users.created_at >', $dateStart);
                $builder = $builder->where('users.created_at <', $dateEnd);
                $builder = $builder->groupEnd();
            }

            $builder = $builder->join('groups', 'groups.id = users.group_id');

            return [
                'users' => $builder->paginate($perPage),
                'pager' => $builder->pager
            ];
        }
    }
