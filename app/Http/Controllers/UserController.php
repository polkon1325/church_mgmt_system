<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Retrieve all users from the database

        return view('user.index', ['users' => $users]); // Pass the data to a view
    }
}
