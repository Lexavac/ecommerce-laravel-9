<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function index(Request $request, $name){
        $check = Favorite::where('product_name', $name)->where('user_id', Auth()->id())->first();
        if ($check) {
            return Redirect()->back()->with([
                'message' => 'Already Been Added',
                'type' => 'warning'
            ]);
        }else{
            Favorite::insert([
                'user_id' => Auth()->id(),
                'product_name' => $name,
                'price' => $request->price,
                'img_link' => $request->image
            ]);
            return Redirect()->back()->with([
                'message' => 'Added to your favorites !',
                'type' => 'info'
            ]);
        }
    }

    public function showFavorite(){
        $favorites = Favorite::where('user_id', Auth()->id())->latest()->get();
        return view('frontend.favorite.index', compact('favorites'));
    }
}
