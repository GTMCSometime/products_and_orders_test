<?php

namespace App\Http\Controllers\Product;

use App\Http\Requests\Product\ProductStoreRequest;
use App\Http\Requests\Product\ProductUpdateRequest;
use App\Models\Category;
use App\Models\Product;

class ProductController extends ProductBaseController
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    
    public function create()
    {
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    
    public function store(ProductStoreRequest $request)
    {
        try {
            $data = $request->validated();
            $this->productStoreService->store($data);
            return redirect()->route('products.index');
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('product.edit', compact('product', 'categories'));
    }

    
    public function update(ProductUpdateRequest $request, Product $product)
    {
        try {
            $data = $request->validated();
            $this->productUpdateService->update($product, $data);
            return redirect()->route('products.index');
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }
}
