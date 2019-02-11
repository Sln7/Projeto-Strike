<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    function new () {
        return view('admin.products.store');
    }

    public function store(ProductRequest $request)
    {
        //Validando inserções conforme request
        $request->validated();

        //transferindo dados para o array
        $productData = $request->all();

        $product = new Product();
        $product->create($productData);

        return index();
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(ProductRequest $request, $id)
    {
        $productData = $request->all();

        $validator = $request->validated();

        $product = Product::findOrFail($id);
        $product->update($productData);

        print 'produto atualizado com sucesso';
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        print 'produto removido com sucesso';
    }
}
