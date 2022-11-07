<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CController extends Controller
{
    public function index()
    {
        return view('frontend.cart.index');
    }
}
