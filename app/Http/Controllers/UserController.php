<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    // GET login form
    public function login() {
        return view('user.login');
    }

    // GET register form
    public function register() {
        return view('user.register');
    }

    // GET form to edit a user
    public function edit($id)
    {
        return view('user.edit', [
            'user' => User::findOrFail($id)
        ]);
    }

    // PUT a user
    public function update(Request $request, $id)
    {
        $validatedUser = $request->validate([
            'name' => ['required', 'min:3', 'max:50', 'string'],
            'email' => ['required', 'email'],
            'password' => [
                'required',
                'confirmed', 
                Password::min(8)
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
            ],
        ]);

        User::where('id', $id)->update();

        return redirect('/dashboard/admin/users-list');
    }

    // DELETE a user
    public function destroy($id)
    {
        User::where('id', $id)->delete();

        return back();
    }
}
