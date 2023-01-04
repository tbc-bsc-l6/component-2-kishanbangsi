<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    public function all() 
    {
        return view('pages.all-products', [
            'products' => Product::latest()->paginate(9)
        ]);
    }


    public function search()
    {
        return view('pages.search', [
            'products' => Product::latest()->filter(request(['search']))->paginate(9)
        ]);
    }

    public function auth()
    {
        return view('pages.non-authorized');
    }


    public function error()
    {
        return view('pages.404');
    }
}
