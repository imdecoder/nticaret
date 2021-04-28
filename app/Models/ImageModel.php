<?php

    namespace App\Models;

    use \CodeIgniter\Model;
    use App\Entities\ImageEntity;

    class ImageModel extends Model
    {
        protected $table = 'images';
        protected $primaryKey = 'id';

        protected $returnType = ImageEntity::class;
        protected $useSoftDeletes = false;

        protected $allowedFields = [
            'name',
            'slug',
            'url',
            'type',
            'size'
        ];

        protected $useTimestamps = true;
        protected $createdField = 'created_at';
        protected $updatedField = 'updated_at';

        protected $validationRules = [
            'name' => 'required',
            'slug' => 'required',
            'url' => 'required',
            'type' => 'required',
            'size' => 'required'
        ];

        protected $validationMessages = [
            'name' => [
                'required' => 'Validation.text.image_name_required'
            ],
            'slug' => [
                'required' => 'Validation.text.image_slug_required'
            ],
            'url' => [
                'required' => 'Validation.text.image_url_required'
            ],
            'type' => [
                'required' => 'Validation.text.image_type_required'
            ],
            'size' => [
                'required' => 'Validation.text.image_size_required'
            ]
        ];
    }
