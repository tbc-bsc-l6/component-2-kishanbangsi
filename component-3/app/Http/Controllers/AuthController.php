<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Get register page
    public function register()
    {
        return view('pages.register');
    }

    // Get login page
    public function login()
    {
        return view('pages.login');
    }
}
