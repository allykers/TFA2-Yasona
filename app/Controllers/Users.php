<?php

namespace App\Controllers;

class Users extends BaseController {
    public function index() {
        $users = [
            [
                'username' => 'admin06',
                'full_name' => 'Allyssa Yasona',
                'role' => 'Administrator'
            ],
            [
                'username' => 'admin07',
                'full_name' => 'Adrina Rosario',
                'role' => 'Administrator'
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Frances Santos',
                'role' => 'Manager'
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Mikee Ramos',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Richard Gomez',
                'role' => 'Cashier'
            ]
        ];

        return view('users', [
            'users' => $users
        ]);
    }
}