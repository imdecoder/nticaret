<?php

    $routes->group('admin', function ($routes) {
        $routes->match(['get', 'post'], 'register', 'Backend\Register::index', ['as' => 'admin_register']);
    });
