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
            'email' => 'required|valid_email|is_unique[users.email]',
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
    }
