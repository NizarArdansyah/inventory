<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $data = [
            [
                'fullname' => 'Administrator', 
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => password_hash('admin', PASSWORD_DEFAULT),
                'role' => 'admin',
                'status' => 'active'
            ],
            [
                'fullname' => 'Kasir', 
                'username' => 'kasir',
                'email' => 'kasir@gmail.com',
                'password' => password_hash('kasir', PASSWORD_DEFAULT),
                'role' => 'cashier',
                'status' => 'active'
            ],
        ];

        // Using Query Builder
        $this->db->table('users')->insertBatch($data);
    }
}
