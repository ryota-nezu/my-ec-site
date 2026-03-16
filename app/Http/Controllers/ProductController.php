<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = \App\Models\Product::findOrFail($id); //指定された商品を一件取得
        return view('products.show', compact('product'));
    }
}
