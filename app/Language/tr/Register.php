<?php

    return [
        'view' => [
            'title' => 'Kayıt Ol',
            'firstname' => 'Ad',
            'lastname' => 'Soyad',
            'email' => 'E-posta',
            'password' => 'Şifre',
            'password_conf' => 'Şifre Tekrar',
            'contract' => 'Şartları ve Koşulları kabul ediyorum',
            'button' => 'Kayıt Ol'
        ],
        'controller' => [
            'validation' => [
                'firstname' => [
                    'required' => 'Ad zorunlu bir alandır.',
    				'string' => 'Ad sadece alfabetik karakterlerden oluşmalıdır.',
    				'min_length' => 'Ad en az 3 karakterden oluşmalıdır.'
                ],
                'lastname' => [
                    'required' => 'Soyad zorunlu bir alandır.',
    				'string' => 'Soyad sadece alfabetik karakterlerden oluşmalıdır.',
    				'min_length' => 'Soyad en az 3 karakterden oluşmalıdır.'
                ],
                'email' => [
                    'required' => 'E-posta zorunlu bir alandır.',
    				'valid_email' => 'Lütfen geçerli bir e-posta adresi girin.'
                ],
                'password' => [
                    'required' => 'Şifre zorunlu bir alandır.',
    				'min_length' => 'Şifre en az 3 karakterden oluşmalıdır.'
                ],
                'password2' => [
                    'required' => 'Şifre tekrarı zorunlu bir alandır.',
    				'min_length' => 'Şifre tekrarı en az 3 karakterden oluşmalıdır.',
    				'matches' => 'Girmiş olduğunuz şifreler eşleşmiyor.'
                ]
            ]
        ]
    ];
