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
            
        ];
    }
