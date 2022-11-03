<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerClassr extends Controller
{
    public function cs(){
        return view('admin.classr');
    }
}
