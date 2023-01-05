<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
        return view('pages.user-dashboard', [
            'products' => Product::where('user_id', $id)->latest()->paginate(10)
        ]);
    }


    // GET 404 page
    public function error()
    {
        return view('pages.404');
    }
}
