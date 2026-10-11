<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PasswordSeeder extends Seeder
{
    public function run()
    {
        $passwords = [
            'admin06' => 'all!0690',
            'admin07' => '@driKate07',
            'manager01' => 'j0hn05!!',
            'cashier01' => 'user01@1',
            'cashier02' => 'user02#1'
        ];

        foreach ($passwords as $username => $password) {
            $user = $this->db
                ->table('users')
                ->where('username', $username)
                ->get()
                ->getRowArray();

            if (!$user) {
                echo "Username not found: {$username}" . PHP_EOL;
                continue;
            }

            $this->db
                ->table('users')
                ->where('id', $user['id'])
                ->update([
                    'password' => password_hash($password, PASSWORD_DEFAULT)
                ]);

            echo "Password updated for: {$username}" . PHP_EOL;
        }
    }
}