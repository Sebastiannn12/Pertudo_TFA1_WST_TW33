<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin01',
                'full_name' => 'Francis Pertudo',
                'role' => 'Administrator'
            ],

            [
                'username' => 'cashier01',
                'full_name' => 'Arjay Mendoza',
                'role' => 'Cashier'
            ],

            [
                'username'  => 'cashier01',
                'full_name' => 'Angela Cruz',
                'role'      => 'Cashier',
            ],

            [
                'username'  => 'cashier02',
                'full_name' => 'Jin Matilac',
                'role'      => 'Cashier',
            ],

            [
                'username'  => 'staff01',
                'full_name' => 'John Reyes',
                'role'      => 'Staff',
            ],

            [
                'username'  => 'manager01',
                'full_name' => 'Matt Garcia',
                'role'      => 'Manager',
            ]
        ];

        return view('users', ['users' => $users]);
    }
}
