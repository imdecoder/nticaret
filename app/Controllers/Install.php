<?php

    namespace App\Controllers;

    use App\Controllers\BaseController;

    class Install extends BaseController
    {
        public function createTable()
        {
            $migrate = \Config\Services::migrations();
            $migrate->latest();
        }

        public function createAdmin()
        {
            $seeder = \Config\Database::seeder();
            $seeder->call('App\Database\Seeds\AdminSeeder');
        }

        public function createDemo()
        {
            $seeder = \Config\Database::seeder();
            $seeder->call('App\Database\Seeds\Demo\UserSeeder');
        }
    }
