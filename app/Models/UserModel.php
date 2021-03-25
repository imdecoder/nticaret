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
            //'group_id',
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
            //'group_id' => 'required|numeric',
            'firstname' => 'required|string|min_length[3]',
            'lastname' => 'required|string|min_length[3]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required',
            'verify_key' => 'required|alpha',
            'verify_code' => 'numeric|min_length[6]',
            'status' => 'required'
        ];

        protected $validationMessages = [
            /*'group_id' => [
                'required' => 'User.model.validation.group_id.required',
                'numeric' => 'User.model.validation.group_id.numeric'
            ],*/
            'firstname' => [
                'required' => 'User.model.validation.firstname.required',
                'string' => 'User.model.validation.firstname.string',
                'min_length' => 'User.model.validation.firstname.min_length'
            ],
            'lastname' => [
                'required' => 'User.model.validation.lastname.required',
                'string' => 'User.model.validation.lastname.string',
                'min_length' => 'User.model.validation.lastname.min_length'
            ],
            'email' => [
                'required' => 'User.model.validation.email.required',
                'valid_email' => 'User.model.validation.email.valid_email',
                'is_unique' => 'User.model.validation.email.is_unique'
            ],
            'password' => [
                'required' => 'User.model.validation.password.required'
            ],
            'verify_key' => [
                'required' => 'User.model.validation.verify_key.required',
                'alpha' => 'User.model.validation.verify_key.alpha'
            ],
            'verify_code' => [
                'numeric' => 'User.model.validation.verify_code.numeric',
                'min_length' => 'User.model.validation.verify_code.min_length'
            ],
            'status' => [
                'required' => 'User.model.validation.status.required'
            ]
        ];
    }
