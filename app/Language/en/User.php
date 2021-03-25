<?php

    return [
        'model' => [
            'validation' => [
                'group_id' => [
                    'required' => 'Group ID is a required field.',
                    'numeric' => 'Group ID should consist of numbers only.'
                ],
                'firstname' => [
                    'required' => 'Firstname is a required field.',
                    'string' => 'Firstname must only contain alphabetic characters.',
                    'min_length' => 'Firstname must contain at least 3 characters.'
                ],
                'lastname' => [
                    'required' => 'Surname is a required field.',
                    'string' => 'Surname should only contain alphabetic characters.',
                    'min_length' => 'Surname must contain at least 3 characters.'
                ],
                'email' => [
                    'required' => 'Email is a required field.',
                    'valid_email' => 'Please enter a valid email address.',
                    'is_unique' => 'This email address is used by another user. Please try another one.'
                ],
                'password' => [
                    'required' => 'Password is a required field.'
                ],
                'verify_key' => [
                    'required' => 'Verification key is a required field.',
                    'alpha' => 'Verification key should only contain alphabetic characters.'
                ],
                'verify_code' => [
                    'numeric' => 'Verification code should consist of numbers only.',
                    'min_length' => 'Verification code must be at least 6 characters.'
                ],
                'status' => [
                    'required' => 'User status is a required field.'
                ]
            ]
        ]
    ];
