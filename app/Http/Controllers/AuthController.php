<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    // Show login form
    public function login() {
        return view('pages.user.login');
    }

    // Login user
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->withSuccess('You are now logged in!');
        }

        return back()
            ->withFail('Invalid Credentials!')
            ->onlyInput('email');
    }

    // Show register form
    public function register() {
        return view('pages.user.register');
    }

    // Create new user
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required|min:3|max:50|string',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:7'
        ]);

        // Hash password
        $formFields['password'] = bcrypt($request->password);

        User::create($formFields);

        return redirect('/')->withSuccess('Account created successfully!');
    }

    // Logout user
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->withSuccess('You have been logged out!');
    }


}
