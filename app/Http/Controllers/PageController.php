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
        $products = cache()->remember('3217ef80-a9af-49ac-9fee-502223bec531' . request('page', 1), 3600, function () {
            return Product::latest()->paginate(9);
        });

        return view('products.all-products', [
            'products' => $products
        ]);
    }

    // GET searched products
    public function search()
    {
        return view('products.search', [
            'products' => Product::latest()->filter(request(['search']))->paginate(9)
        ]);
    }

    // GET not authorized page
    public function unauth()
    {
        return view('error.non-authorized');
    }

    // GET 404 page
    public function error()
    {
        return view('error.404');
    }
}
