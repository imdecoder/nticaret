<?php

    namespace App\Models;

    use CodeIgniter\Model;
    use App\Entities\GroupEntity;

    class GroupModel extends Model
    {
        protected $table = 'groups';
        protected $primaryKey = 'id';

        protected $returnType = GroupEntity::class;
        protected $useSoftDeletes = true;

        protected $allowedFields = [
            'slug',
            'title',
            'permissions'
        ];

        protected $useTimestamps = true;
        protected $createdField = 'created_at';
        protected $updatedField = 'updated_at';
        protected $deletedField = 'deleted_at';

        protected $validationRules = [
            'slug' => 'required|is_unique[groups.slug]',
            'title' => 'required',
            'permissions' => 'required'
        ];

        protected $validationMessages = [
            'slug' => [
                'required' => 'Validation.text.group_slug_required',
                'is_unique' => 'Validation.text.group_slug_is_unique'
            ],
            'title' => [
                'required' => 'Validation.text.group_title_required'
            ],
            'permissions' => [
                'required' => 'Validation.text.group_permissions_required'
            ]
        ];
    }
