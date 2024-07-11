<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Product $product)
    {
        $products = $product->all();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateProduct $request)
    {
        //criar meu produto no banco
        $pd = Product::create($request->validated());

        // redirecionar para index
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find((int)$id);
        
        if(!isset($product)){
            return back();
        }

        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find((int)$id);
        
        if(!isset($product)){
            return back();
        }

        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateProduct $request, string $id)
    {
        $product = Product::find((int)$id);
        if(!isset($product)){
            return back();
        }

        //atualizar meu produto no banco
        $pd = $product->update($request->validated());

        // redirecionar para index
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find((int)$id);
        if(!isset($product)){
            return back();
        }

        $product->delete();
        return redirect()->route('products.index');
    }
}
