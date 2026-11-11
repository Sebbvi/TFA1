<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = [
            ['username' => 'Heisenberg', 'name' => 'Walter White', 'role' => 'Administrator'],
            ['username' => 'Sky', 'name' => 'Skyler White', 'role' => 'Cashier'],
            ['username' => 'Capn Cook', 'name' => 'Jessie Pinkman', 'role' => 'Manager'],
            ['username' => 'Tuco', 'name' => 'Tuco Salamanca', 'role' => 'Cashier'],
            ['username' => 'Saul', 'name' => 'Jimmy McGill', 'role' => 'Supervisor'],
        ];

        return view('users', compact('users'));
    }
}
