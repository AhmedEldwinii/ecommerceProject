<?php

use App\Http\Controllers\Site\CartController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('index');
Route::get('/category/{name}', [HomeController::class,'index2'])->name('product.index');
Route::get('/product/{id}',[ProductController::class,'show'])->name('product.show');
Route::get('/cart' , [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/store' , [CartController::class, 'addToCart'])->name('cart.store');
Route::put('/cart/update' ,[CartController::class, 'updateCart' ])->name('cart.update');
Route::delete('/cart/remove' ,[CartController::class, 'removeItem'])->name('cart.remove');
Route::delete('/cart/clear' ,[CartController::class, 'clearCart'])->name('cart.clear');



Auth::routes();
