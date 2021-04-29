<?php

    namespace Config;

    use CodeIgniter\Config\BaseConfig;

    class Settings extends BaseConfig
    {
        public $stopAuthFilter = [
            'login',
            'register',
            'forgot-password',
            'reset-password',
            'verification'
        ];

        public $permissions = [
            'admin_login' => 'Permissions.text.admin_login',
            'groups_list' => 'Permissions.text.groups_list',
            'groups_add' => 'Permissions.text.groups_add',
            'groups_edit' => 'Permissions.text.groups_edit',
            'groups_delete' => 'Permissions.text.groups_delete',
            'groups_restore' => 'Permissions.text.groups_restore',
            'groups_hard_delete' => 'Permissions.text.groups_hard_delete',
            'users_list' => 'Permissions.text.users_list',
            'users_add' => 'Permissions.text.users_add',
            'users_edit' => 'Permissions.text.users_edit',
            'users_status' => 'Permissions.text.users_status',
            'users_delete' => 'Permissions.text.users_delete',
            'users_restore' => 'Permissions.text.users_restore',
            'users_hard_delete' => 'Permissions.text.users_hard_delete',
            'images_modal' => 'Permissions.text.images_modal',
            'images_upload' => 'Permissions.text.images_upload',
            'images_list' => 'Permissions.text.images_list'
        ];

        public $perPageList = [5, 10, 20, 40, 80, 100, 250, 500];

        public $thumbnail = ['187x134'];

        public $imageCompress = 70;

        public $watermark = [
            'status' => true,
            'text' => 'localhost.com',
            'color' => '#ffffff',
            'opacity' => 0,
            'withShadow' => true,
            'fontSize' => 500,
            'hAlign' => 'center',
            'vAlign' => 'bottom'
        ];
    }
