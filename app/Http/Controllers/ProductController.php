<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index', [
            'products' => Product::latest()->take(3)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = $request->validate([
            'title' => 'required|string',
            'author' => 'string|nullable',
            'pages' => 'numeric|nullable',
            'band' => 'string|nullable',
            'studio' => 'string|nullable',
            'playlength' => 'numeric|nullable',
            'price' => 'required|numeric',
            'description' => 'string|nullable',
            'category' => 'required|string',
        ]);

        $product['user_id'] = 1;

        if($request->hasFile('image'))
        {
            $product['image'] = $request->file('image')->store('uploaded_images', 'public');
        }

        Product::create($product);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('pages.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('pages.edit', [
            'product' => $product 
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $formProduct = $request->validate([
            'title' => 'required|string',
            'author' => 'string|nullable',
            'pages' => 'numeric|nullable',
            'band' => 'string|nullable',
            'studio' => 'string|nullable',
            'playlength' => 'numeric|nullable',
            'price' => 'required|numeric',
            'description' => 'string|nullable',
            'category' => 'required|string',
        ]);

        $formProduct['user_id'] = 1;

        if($request->hasFile('image'))
        {
            $formProduct['image'] = $request->file('image')->store('uploaded_images', 'public');
        }

        $product->update($formProduct);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/');
    }
}
