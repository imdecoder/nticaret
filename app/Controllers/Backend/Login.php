<?php

    namespace App\Controllers\Backend;

    use \App\Controllers\BaseController;

    class Login extends BaseController
    {
        public function index()
        {
            return view('admin/pages/auth/login');
        }
    }
