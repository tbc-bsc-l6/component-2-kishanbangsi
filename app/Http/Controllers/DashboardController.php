<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    // GET all product of a certain user
    public function getUserProduct($id)
    {
        return view('dashboard.productlist-dashboard', [
            'products' => Product::latest()->where('user_id', $id)->paginate(10)
        ]);
    }

    // GET all users
    public function getAllUsers()
    {
        return view('dashboard.userlist-dashboard', [
            'users' => User::latest()->paginate(10)
        ]);
    }

    // GET all products
    public function getAllProducts()
    {
        return view('dashboard.productlist-dashboard', [
            'products' => Product::latest()->paginate(10)
        ]);
    }
}
