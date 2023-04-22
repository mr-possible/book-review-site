<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $usernames = User::all()->pluck('name');
        return view('users.index', ['usernames' => $usernames]);
    }
}