<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Traits\ImageUploadingTrait;

class CartController extends Controller
{
    use ImageUploadingTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request , $product_name)
    {

        $check = Cart::where('product_name', $product_name)->where('user_ip', Auth()->id())->first();
        if ($check){
            Cart::where('product_name', $product_name)->where('user_ip', Auth()->id()) ->increment('quantity');
            return Redirect()->back()->with([
                'message' => 'Add More Cart Success !',
                'type' => 'warning'
            ]);
        }else {

            Cart::insert([
                'product_name' => $product_name,
                'quantity' => 1,
                'price' => $request->price,
                'user_ip' => Auth()->id(),
            ]);
            return Redirect()->back()->with([
                'message' => 'Add Cart Success !',
                'type' => 'info'
            ]);
        }

    }

    public function CartPage(Product $product)


    {
      $carts = Cart::where('user_ip', Auth()->id())->latest()->get();
        return view('frontend.cart.index', compact('carts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'product_name');
    }

    public function getGalleryAttribute()
    {
        return $this->getMedia('gallery');
    }


}
