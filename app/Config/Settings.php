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
            'group_edit' => 'Permissions.text.groups_edit'
        ];
    }
