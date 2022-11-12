<?php

use App\Http\Controllers\API\GoogleController;
use App\Http\Controllers\FavoriteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [\App\Http\Controllers\HControllerr::class, 'index'])->name('homepage');

// Shop
Route::get('/shop/{slug?}', [\App\Http\Controllers\SController::class, 'index'])->name('shop.index');
Route::get('/shop/tag/{slug?}', [\App\Http\Controllers\SController::class, 'tag'])->name('shop.tag');

// Product
Route::get('/product/{product:slug?}', [\App\Http\Controllers\PController::class, 'show'])->name('product.show');


Route::group(['middleware' => ['auth', 'CheckLevel:admin'], 'prefix' => 'admin',  'as' => 'admin.' ], function (){

    Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/products', [\App\Http\Controllers\Admin\HController::class, 'get_products']);
    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('categories', \App\Http\Controllers\Admin\Tb_productcateController::class);
    Route::post('categories/image', [\App\Http\Controllers\Admin\Tb_productcateController::class, 'storeImage'])->name('categories.storeImage');

    // product
    Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);
    Route::post('products/image', [\App\Http\Controllers\Admin\ProductController::class, 'storeImage'])->name('products.storeImage');

    // Tag
    Route::resource('tags', \App\Http\Controllers\Admin\TagController::class);

});


Route::get('/check', [\App\Http\Controllers\CEController::class, 'check'])->name('check.show');
Route::post('place/order', [\App\Http\Controllers\OrderController::class, 'storeOrder'])->name('place-order');
// Route::post('place/order', [\App\Http\Controllers\OrderController::class, 'index'])->name('index');

Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about.show');
Route::get('/about/detail', [\App\Http\Controllers\AboutController::class, 'detail'])->name('detail');

Route::get('/login', [\App\Http\Controllers\ControllerLogin::class, 'index'])->name('loginPage.login');
Route::get('/register', [\App\Http\Controllers\ControllerLogin::class, 'register'])->name('loginPage.register');

Route::get('/register', [\App\Http\Controllers\ControllerLogin::class, 'register'])->name('loginPage.register');

Route::get('admin/studenttb', [\App\Http\Controllers\Admin\ControllerStudent::class, 'student'])->name('student');
Route::get('admin/classtb', [\App\Http\Controllers\Admin\ControllerClass::class, 'class'])->name('class');

Route::get('admin/classcreate', [\App\Http\Controllers\Admin\ControllerClassc::class, 'cr'])->name('createclass');
Route::get('admin/studentcreate', [\App\Http\Controllers\Admin\ControllerClassr::class, 'cs'])->name('createstudent');


Auth::routes();

Route::get('/homes', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage');

Route::group(['middleware' => 'auth'], function(){ 
    // Cart
    Route::get('/cart/{product:slug?}', [\App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
    Route::get('/carts', [\App\Http\Controllers\CartController::class, 'CartPage'])->name('cart.CartPage');

    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['auth','CheckLevel:seller'], 'prefix' => 'seller',  'as' => 'seller.'], function(){ 
    // Cart
    Route::get('/', function(){
        return "page Seller";
    });
});


//favorite

Route::get('/favorites', [FavoriteController::class, 'showFavorite']);
Route::get('/favorite/add/{product:name?}', [App\Http\Controllers\FavoriteController::class, 'index'])->name('favorite.add');


// API Google
Route::controller(GoogleController::class)->group(function(){
    Route::get('/auth/{provider}', [GoogleController::class, 'redirectToProvider']);
    Route::get('/auth/{provider}/callback', [GoogleController::class, 'handleProvideCallback']);
});


