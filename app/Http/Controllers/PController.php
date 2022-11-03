<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PController extends Controller
{
    public function show($slug = null){
        return view('frontend.product.show');
    }
}
