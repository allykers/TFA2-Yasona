<?php

namespace App\Controllers;

class Customers extends BaseController {
    public function index() {
        $customers = [
            [
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan07@gmail.com',
                'phone' => '09647845679'
            ],
            [
                'full_name' => 'Kate Larinay',
                'email' => 'larona05@gmail.com',
                'phone' => '09807065171'
            ],
            [
                'full_name' => 'John Hernadez',
                'email' => 'jbh@gmail.com',
                'phone' => '09035567121'
            ],
            [
                'full_name' => 'Sara Duterte',
                'email' => 'saradutae@gmail.com',
                'phone' => '09887766554'
            ],
            [
                'full_name' => 'Martin Romualdez',
                'email' => 'sickleav3@gmail.com',
                'phone' => '09313167543'
            ]
        ];

        return view('customers', [
            'customers' => $customers
        ]);
    }
}