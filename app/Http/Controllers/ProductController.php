<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Support\Facades\Gate;

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
    public function store(StoreProductRequest $request)
    {
        $validatedRequest = $request->validated();

        $validatedRequest['user_id'] = auth()->id();

        if($request->hasFile('image'))
        {
            $validatedRequest['image'] = $request->file('image')->store('uploaded_images', 'public');
        }

        Product::create($validatedRequest);

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
        if (!Gate::allows('update-product', $product)) {
            $response = Gate::inspect('update-product', $product);

            dd($response->message());
        }

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
    public function update(StoreProductRequest $request, Product $product)
    {
        $validatedRequest = $request->validated();

        $validatedRequest['user_id'] = auth()->id();

        if($request->hasFile('image'))
        {
            $validatedRequest['image'] = $request->file('image')->store('uploaded_images', 'public');
        }

        $product->update($validatedRequest);

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
        if (!Gate::allows('delete-product', $product)) {
            $response = Gate::inspect('delete-product', $product);

            dd($response->message());
        }

        $product->delete();

        return redirect('/');
    }
}
