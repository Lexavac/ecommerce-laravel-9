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

    public function getProducts(){
        $products = Product::with('category')->get(['id','name', 'price','slug']);

        return response()->json([
            'status' => 200,
            'products' => $products
        ]);
    }
}
