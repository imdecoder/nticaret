<?php

    return [
        'view' => [
            'title' => 'Register',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'password' => 'Password',
            'password_conf' => 'Password Confirmation',
            'contract' => 'I agree with the Terms and Conditions',
            'button' => 'Register'
        ],
        'controller' => [
            'validation' => [
                'firstname' => [
                    'required' => 'Firstname is a required field.',
                    'string' => 'Firstname must only contain alphabetic characters.',
                    'min_length' => 'Firstname must contain at least 3 characters.'
                ],
                'lastname' => [
                    'required' => 'Lastname is a required field.',
                    'string' => 'Lastname should only contain alphabetic characters.',
                    'min_length' => 'Lastname must contain at least 3 characters.'
                ],
                'email' => [
                    'required' => 'Email is a required field.',
                    'valid_email' => 'Please enter a valid email address.'
                ],
                'password' => [
                    'required' => 'Password is a required field.',
                    'min_length' => 'Password must be at least 3 characters.'
                ],
                'password2' => [
                    'required' => 'Password confirmation is a required field.',
                    'min_length' => 'Password confirmation must consist of at least 3 characters.',
                    'matches' => 'The passwords you entered do not match.'
                ]
            ]
        ]
    ];
