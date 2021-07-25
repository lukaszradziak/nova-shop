<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(16);
        return view('product.index', compact('products'));
    }

    public function show($slug){
        $product = Product::whereSlug($slug)->firstOrFail();
        return view('product.show', compact('product'));
    }
}
