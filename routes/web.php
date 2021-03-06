<?php

use App\Http\Controllers\KategoriController;
use App\Models\Kategori;
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
    $data = Kategori::where('parent_id',null)->get();
    return view('layouts/home-page',compact('data'));
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

Route::get('/menu', function () {
    return view('layouts/menu-product');
});

Route::get('/menu-detail', function () {
    return view('layouts/detail-product');
});

Route::get('/modaltest', function () {
    return view('partials/modaltest');
});

// Route::get('/order', function () {
    
//     $user = Auth::user();
//         // dd($user);
//         return view('partials.order', ['user' => $user]);
//     // return view('layouts/order-product');
// });


Route::get('/pembina', function () {
    return view('layouts/auth-pembina');
});

Route::get('/petani', function () {
    return view('layouts/auth-petani');
});



// Route::get('/create-product', function () {
//     return view('master.product-master');
// });

// Route::resource('/create-product', MenuController::class);

// Route::get('/order', [App\Http\Controllers\OrderController::class, 'index'])->name('order-product');
// Route::get('/checkout-product', [App\Http\Controllers\OrderController::class, 'index'])->name('checkout-product');
// Route::post('/order-product', [App\Http\Controllers\OrderController::class, 'store'])->name('order-product');

Route::get('/home', [App\Http\Controllers\ProductController::class, 'show2'])->name('management-product');
Route::get('/show-product',  [App\Http\Controllers\ProductController::class, 'show'])->name('show-product');   
Route::get('/detail-product/{id}', [App\Http\Controllers\ProductController::class, 'detail'])->name('detail-product');



//DASHBOARD ADMIN ROUTES
Route::group(['middleware' => ['admin']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('management-product');
    Route::get('/management-produk', [App\Http\Controllers\ProductController::class, 'index'])->name('management-product');
    Route::get('/management-order', [App\Http\Controllers\OrderController::class, 'indexDashboard'])->name('management-order');
    Route::resource('management-kategori',KategoriController::class);
//     Route::get('/dashboard-admin', function(){
//     return view('master.app-dashboard');
// });
Route::get('/dashboard-admin', function(){
    return view('master.app-dashboard');
});
    Route::get('/order', [App\Http\Controllers\OrderController::class, 'index'])->name('order-product');
    Route::get('/checkout-product', [App\Http\Controllers\OrderController::class, 'index'])->name('checkout-product');
    Route::post('/order-product', [App\Http\Controllers\OrderController::class, 'store'])->name('order-product');
    Route::get('/create-product', [App\Http\Controllers\ProductController::class, 'create'])->name('create-product');
    Route::post('/simpan-product', [App\Http\Controllers\ProductController::class, 'store'])->name('simpan-product'); 
    Route::patch('/update-product/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('update-product'); 
    Route::delete('/delete-product/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('delete-product');
    Route::get('/edit-product/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('edit-product');
});

Route::group(['middleware' => ['member']], function () {
    Route::get('/order', [App\Http\Controllers\OrderController::class, 'index'])->name('order-product');
    Route::get('/checkout-product', [App\Http\Controllers\OrderController::class, 'index'])->name('checkout-product');
    Route::post('/order-product', [App\Http\Controllers\OrderController::class, 'store'])->name('order-product');
});

Auth::routes();