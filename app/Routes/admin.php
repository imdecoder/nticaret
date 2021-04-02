<?php

    $routes->group('admin', function ($routes) {
        $routes->match(['get', 'post'], 'login', 'Backend\Login::index', ['as' => 'admin_login']);
        $routes->match(['get', 'post'], 'register', 'Backend\Register::index', ['as' => 'admin_register']);
        $routes->match(['get', 'post'], 'forgot-password', 'Backend\Forgot::index', ['as' => 'admin_forgot_password']);
        $routes->match(['get', 'post'], 'reset-password', 'Backend\Forgot::resetPassword', ['as' => 'admin_reset_password']);

        $routes->get('logout', 'Backend\Login::logout', ['as' => 'admin_logout']);
        $routes->get('permission/failed', 'Backend\Permissions::error', ['as' => 'admin_permission_error']);

        $routes->group('verification', function ($routes) {
            $routes->get('account/(:segment)', 'Backend\Verification::account/$1', ['as' => 'admin_account_verification']);
            $routes->get('forgot-password/(:segment)', 'Backend\Verification::forgot/$1', ['as' => 'admin_forgot_verification']);
        });

        $routes->get('dashboard', 'Backend\Dashboard::index', ['as' => 'admin_dashboard']);

        $routes->group('groups', function ($routes) {
            $routes->get('list(:any)', 'Backend\Groups::list$1', ['as' => 'admin_group_list']);
            $routes->match(['get', 'post'], 'add', 'Backend\Groups::add', ['as' => 'admin_group_add']);
            $routes->match(['get', 'post'], 'edit/(:num)', 'Backend\Groups::edit/$1', ['as' => 'admin_group_edit']);
            $routes->post('delete', 'Backend\Groups::delete', ['as' => 'admin_group_delete']);
            $routes->post('restore', 'Backend\Groups::restore', ['as' => 'admin_group_restore']);
            $routes->post('hard-delete', 'Backend\Groups::hardDelete', ['as' => 'admin_group_hard_delete']);
        });

        $routes->group('users', function ($routes) {
            $routes->get('list(:any)', 'Backend\Users::list$1', ['as' => 'admin_user_list']);
            $routes->match(['get', 'post'], 'add', 'Backend\Users::add', ['as' => 'admin_user_add']);
            $routes->match(['get', 'post'], 'edit/(:num)', 'Backend\Users::edit/$1', ['as' => 'admin_user_edit']);
            $routes->post('status', 'Backend\Users::status', ['as' => 'admin_user_status']);
            $routes->post('delete', 'Backend\Users::delete', ['as' => 'admin_user_delete']);
            $routes->post('restore', 'Backend\Users::restore', ['as' => 'admin_user_restore']);
            $routes->post('hard-delete', 'Backend\Users::hardDelete', ['as' => 'admin_user_hard_delete']);
        });
    });
