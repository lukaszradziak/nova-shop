<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $products = Product::limit(8)->get();
        return view('page.index', compact('products'));
    }
}
