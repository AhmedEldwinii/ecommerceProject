<?php

use App\Http\Controllers\Dashboard\IndexController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Facade;

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

Route::get("/admin", [IndexController::class,'index'])->name("admin");

Route::group(["as"=> "dashboard."], function () {
    Route::put("settings/{setting}/update", [SettingController::class , "update"])->name("settings.update");
    Route::get("settings", [SettingController::class , 'index' ])->name("settings.index");

    Route::get("categories/ajax", [CategoryController::class , 'getall'])->name('categories.getall');
    Route::delete("categories/delete", [CategoryController::class , 'delete'])->name('categories.delete');
    Route::resource("categories", CategoryController::class);
});


