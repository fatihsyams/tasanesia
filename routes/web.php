<?php


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

Route::get('/', function () {
    return view('layouts/home-page');
});

Route::get('/contact', function () {
    return view('layouts/contact-page');
});

Route::get('/campaign', function () {
    return view('layouts/our-campaign');
});

Route::get('/campaign-menu', function () {
    return view('layouts/our-campaign-menu');
});

Route::get('/testing', function () {
    return view('layouts/testing-page');
});
Route::get('/campaign2', function () {
    return view('layouts/halal-food-campaign');
});



Route::get('/menu-detail', function () {
    return view('layouts/detail-product');
});
Route::get('/order', function () {
    return view('layouts/order-product');
});




// Route::get('/create-product', function () {
//     return view('master.product-master');
// });

// Route::resource('/create-product', MenuController::class);

Route::get('/create-product', [App\Http\Controllers\ProductController::class, 'index'])->name('create-product');
Route::post('/simpan-product', [App\Http\Controllers\ProductController::class, 'store'])->name('simpan-product'); 
Route::get('/show-product',  [App\Http\Controllers\ProductController::class, 'show'])->name('show-product'); 

Route::get('/checkout-product', [App\Http\Controllers\OrderController::class, 'index'])->name('checkout-product');
Route::post('/order-product', [App\Http\Controllers\OrderController::class, 'store'])->name('order-product'); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();