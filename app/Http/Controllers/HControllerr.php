<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HControllerr extends Controller
{
    public function index(){

        $products = Product::with('category')->get(['id','name','price','slug']);

        return view('frontend.homepage', compact('products'));
    }
}
