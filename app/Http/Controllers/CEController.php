<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CEController extends Controller
{
    public function check(){
        return view('frontend.check.check');
    }
}
