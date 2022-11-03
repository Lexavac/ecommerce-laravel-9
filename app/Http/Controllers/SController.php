<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Tb_productcate;
use Illuminate\Http\Request;

class SController extends Controller
{
    public function index()
    {
        $products = Product::with('category');
        // $cartTotal = \Cart::getTotal();
        // $cartCount = \Cart::getContent()->count();

        $products = $products->paginate(2);
        return view('frontend.shop.index',compact('products'));
    }

    public function getProducts(Request $request,$slug = null){

        $sorting = $request->sortingBy;

        switch ($sorting) {
            case 'popularity':
                $sortField = 'id';
                $sortType = 'desc';
                break;
            case 'low-high':
                $sortField = 'price';
                $sortType = 'asc';
                break;
            default:
                $sortField = 'id';
                $sortType = 'asc';
        }

        $products = Product::with('category');

        if(!is_null($slug)){
            $category = Tb_productcate::whereSlug($slug)->firstOrFail();


            if (is_null($category->category_id)) {

                $categoriesIds = Tb_productcate::whereCategoryId($category->id)->pluck('id')->toArray();
                $categoriesIds[] = $category->id;

                $products = $products->whereHas('category', function ($query) use ($categoriesIds) {

                    $query->whereIn('id', $categoriesIds);
                });

            } else {
                $products = $products->whereHas('category', function ($query) use ($slug) {

                    $query->where([

                        'slug' => $slug,
                    ]);
                });

            }
        }

        $products = $products->orderBy($sortField, $sortType)->get();

        return response()->json([
            'message' => 'Success',
            'products' => $products
        ]);

    }

    public function tag(Request $request, $slug)
    {
        $sorting = $request->sortingBy;
        switch ($sorting) {
            case 'popularity':
                $sortField = 'id';
                $sortType = 'desc';
                break;
            case 'low-high':
                $sortField = 'price';
                $sortType = 'asc';
                break;
            default:
                $sortField = 'id';
                $sortType = 'asc';
        }

        $products = Product::with('tags');

        $products = $products->whereHas('tags', function ($query) use($slug) {
            $query->where([
                'slug' => $slug,
            ]);
        })
        ->orderBy($sortField, $sortType)
        ->paginate(6);

        return view('frontend.shop.index', compact('products','slug'));
    }
}
