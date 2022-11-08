<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CEController extends Controller
{
    public function check(){

        if(Auth::check()){
            return view('frontend.check.check');
        } else {
            return redirect()->Route('login');
        }
    }
}
