<?php

    namespace App\Database\Seeds;

    use \CodeIgniter\Database\Seeder;
    use App\Models\GroupModel;

    class AdminSeeder extends Seeder
    {
        public function run()
        {
            helper('text');

            $groupModel = new GroupModel();
            $group = $groupModel->where('slug', DEFAULT_ADMIN_GROUP)->first();

            $data = [
                'group_id' => $group->id,
                'firstname' => 'Emin Arif',
                'lastname' => 'Pirinç',
                'email' => 'eminarifpirinc@gmail.com',
                'password' => password_hash('123456', PASSWORD_DEFAULT),
                'verify_key' => random_string('alpha', 64),
                'verify_code' => random_int(100000, 999999),
                'bio' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'status' => STATUS_ACTIVE
            ];

            $this->db->table('users')->insert($data);
        }
    }
