<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;


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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::view('/register','register');
Route::post("/login",[UserController::class, 'login']);
Route::post("/register",[UserController::class, 'register']);
Route::get("/",[ProdukController::class, 'index']);
Route::get("/detail/{id}",[ProdukController::class, 'detail']);
Route::get("cari",[ProdukController::class, 'cari']);
Route::post("add_to_cart",[ProdukController::class, 'addToCart']);
Route::get("cartlist",[ProdukController::class, 'cartList']);
Route::get("hapuskeranjang/{id}",[ProdukController::class, 'hapusKeranjang']);
Route::get("belisekarang",[ProdukController::class, 'beliSekarang']);
Route::post("orderplace",[ProdukController::class, 'orderPlace']);
Route::get("myorders",[ProdukController::class, 'myOrders']);