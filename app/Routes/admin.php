<?php

    $routes->group('admin', function ($routes) {
        $routes->match(['get', 'post'], 'login', 'Backend\Login::index', ['as' => 'admin_login']);
        $routes->match(['get', 'post'], 'register', 'Backend\Register::index', ['as' => 'admin_register']);
        $routes->match(['get', 'post'], 'forgot-password', 'Backend\Forgot::index', ['as' => 'admin_forgot_password']);
        $routes->match(['get', 'post'], 'reset-password', 'Backend\Forgot::resetPassword', ['as' => 'admin_reset_password']);
        $routes->group('verification', function ($routes) {
            $routes->get('account/(:segment)', 'Backend\Verification::account/$1', ['as' => 'admin_account_verification']);
            $routes->get('forgot-password/(:segment)', 'Backend\Verification::forgot/$1', ['as' => 'admin_forgot_verification']);
        });
    });
