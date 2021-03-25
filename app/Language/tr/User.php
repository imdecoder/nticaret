<?php

    return [
        'model' => [
            'validation' => [
                'group_id' => [
                    'required' => 'Grup ID zorunlu bir alandır.',
                    'numeric' => 'Grup ID sadece rakamlardan oluşmalıdır.'
                ],
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
                    'valid_email' => 'Lütfen geçerli bir e-posta adresi girin.',
                    'is_unique' => 'Bu e-posta adresi başka bir kullanıcı tarafından kullanılıyor. Lütfen başka bir tane deneyin.'
                ],
                'password' => [
                    'required' => 'Şifre zorunlu bir alandır.'
                ],
                'verify_key' => [
                    'required' => 'Doğrulama anahtarı zorunlu bir alandır.',
                    'alpha' => 'Doğrulama anahtarı sadece alfabetik karakterlerden oluşmalıdır.'
                ],
                'verify_code' => [
                    'numeric' => 'Doğrulama kodu sadece rakamlardan oluşmalıdır.',
                    'min_length' => 'Doğrulama kodu en az 6 karakterden oluşmalıdır.'
                ],
                'status' => [
                    'required' => 'Kullanıcı durumu zorunlu bir alandır.'
                ]
            ]
        ]
    ];
