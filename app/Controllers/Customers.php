<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Rovic Bilbao',
                'email' => 'rovicbilbao11@gmail.com',
                'phone' => '09352352353'
            ],
            [
                'full_name' => 'Angelo Brillantes',
                'email' => 'angelobrillantes41@gmail.com',
                'phone' => '093636235148'
            ],
            [
                'full_name' => 'Tristan Carabbacan',
                'email' => 'carabbacangamer@gmail.com',
                'phone' => '093638235148'
            ],
            [
                'full_name' => 'Arianne Cruz',
                'email' => 'AjCruz67@gmail.com',
                'phone' => '093636875148'
            ],
            [
                'full_name' => 'Misha Recent',
                'email' => 'AshimRecente@gmail.com',
                'phone' => '093636267148'
            ],


        ];
        return view('customers', ['customers' => $customers]);
    }
}
