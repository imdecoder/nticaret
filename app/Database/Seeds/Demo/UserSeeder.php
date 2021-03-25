<?php

    namespace App\Database\Seeds\Demo;

    use \CodeIgniter\Database\Seeder;

    class UserSeeder extends Seeder
    {
        public function run()
        {
            helper('text');

            $faker = \Faker\Factory::create('tr_TR');

            for ($i = 0; $i < 100; $i++)
            {
                $data = [
                    'group_id' => null,
                    'firstname' => $faker->firstName,
                    'lastname' => $faker->lastName,
                    'email' => $faker->email,
                    'password' => password_hash('123456', PASSWORD_DEFAULT),
                    'verify_key' => random_string('alpha', 64),
                    'verify_code' => random_int(100000, 999999),
                    'bio' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                    'status' => USER_ACTIVE
                ];

                $this->db->table('users')->insert($data);
            }
        }
    }
