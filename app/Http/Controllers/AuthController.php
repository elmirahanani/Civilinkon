<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // login
    public function login() 
    {
        return view('auth.login');
    }

    // sign up
    public function register() 
    {
        return view('auth.register');
    }
}
