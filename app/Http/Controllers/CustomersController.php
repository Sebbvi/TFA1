<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = [
            ['name' => 'Gon Freecss', 'email' => 'gon@email.com', 'phone' => '555-0101'],
            ['name' => 'Killua Zoldyck', 'email' => 'killua@email.com', 'phone' => '555-0102'],
            ['name' => 'Hisoka Morow', 'email' => 'hisoka@email.com', 'phone' => '555-0103'],
            ['name' => 'Leorio Paradinight', 'email' => 'leorio@email.com', 'phone' => '555-0104'],
            ['name' => 'Isaac Netero', 'email' => 'isaac@email.com', 'phone' => '555-0105'],
        ];

        return view('customers', compact('customers'));
    }
}
