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
            'users_delete' => 'Permissions.text.users_delete',
            'users_restore' => 'Permissions.text.users_restore',
            'users_hard_delete' => 'Permissions.text.users_hard_delete'
        ];
    }
