<?php

    namespace App\Database\Seeds;

    use \CodeIgniter\Database\Seeder;

    class GroupSeeder extends Seeder
    {
        public function run()
        {
            $admin = [
                'slug' => DEFAULT_ADMIN_GROUP,
                'title' => json_encode([
                    'tr' => 'Yönetici',
                    'en' => 'Administrator'
                ], JSON_UNESCAPED_UNICODE),
                'permissions' => json_encode([

                ], JSON_UNESCAPED_UNICODE)
            ];

            $this->db->table('groups')->insert($admin);

            $user = [
                'slug' => DEFAULT_REGISTER_USER,
                'title' => json_encode([
                    'tr' => 'Kullanıcılar',
                    'en' => 'Users'
                ], JSON_UNESCAPED_UNICODE),
                'permissions' => json_encode([

                ], JSON_UNESCAPED_UNICODE)
            ];

            $this->db->table('groups')->insert($user);
        }
    }
