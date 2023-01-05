<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class PageController extends Controller
{
    // GET all products
    public function all() 
    {
        return view('pages.all-products', [
            'products' => Product::latest()->paginate(9)
        ]);
    }


    // GET searched products
    public function search()
    {
        return view('pages.search', [
            'products' => Product::latest()->filter(request(['search']))->paginate(9)
        ]);
    }


    // GET not authorized page
    public function auth()
    {
        return view('pages.non-authorized');
    }


    // GET all product data of a certain user
    public function accessUserProduct($id)
    {
        return view('pages.dashboard.productlist-dashboard', [
            'products' => Product::where('user_id', $id)->latest()->paginate(10)
        ]);
    }


    // GET all products
    public function accessAllProducts()
    {
        return view('pages.dashboard.productlist-dashboard', [
            'products' => Product::latest()->paginate(10)
        ]);
    }


    // GET all users
    public function accessAllUsers()
    {
        return view('pages.dashboard.userlist-dashboard', [
            'users' => User::latest()->paginate(10)
        ]);
    }


    // PUT a user
    public function edit($id)
    {
        return view('pages.user.user-edit', [
            'user' => User::findOrFail($id)
        ]);
    }


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

        return redirect('/dashboard/admin/users-list');
    }
    
    
    // DELETE a user
    public function destroy($id)
    {
        User::where('id', $id)->delete();

        return back();
    }


    // GET 404 page
    public function error()
    {
        return view('pages.404');
    }
}
