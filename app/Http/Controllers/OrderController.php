<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class OrderController extends Controller
{
    public function storeOrder(Request $request)
    {

        dd($request->all());




        $request->validate([
            'user_id' => auth::id(),
            'invoice_no' => mt_rand(10000000,9999999),
            'payment_type' => $request->payment_type,
            ''
        ]);

        $checks = Cart::where('user_ip', Auth()->id())->latest()->get();
        return view('frontend.check.check', compact('checks'));
    }
}
