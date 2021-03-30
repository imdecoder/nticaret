<?php

    namespace App\Models;

    use \CodeIgniter\Model;
    use App\Entities\LanguageEntity;

    class LanguageModel extends Model
    {
        protected $table = 'languages';
        protected $primaryKey = 'id';

        protected $returnType = LanguageEntity::class;
        protected $useSoftDeletes = true;

        protected $allowedFields = [
            'code',
            'flag',
            'title',
            'status',
            'deleted_at'
        ];

        protected $useTimestamps = true;
        protected $createdField = 'created_at';
        protected $updatedField = 'updated_at';
        protected $deletedField = 'deleted_at';

        protected $validationRules = [
            'code' => 'required|min_length[2]|is_unique[languages.code]',
            'flag' => 'required|min_length[2]',
            'title' => 'required'
        ];

        protected $validationMessages = [
            'code' => [
                'required' => 'Validation.text.language_code_required',
                'min_length' => 'Validation.text.language_code_min_length',
                'is_unique' => 'Validation.text.language_code_is_unique'
            ],
            'flag' => [
                'required' => 'Validation.text.language_flag_required',
                'min_length' => 'Validation.text.language_flag_min_length'
            ],
            'title' => [
                'required' => 'Validation.text.language_title_required'
            ]
        ];
    }
