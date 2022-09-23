<?php

use App\Http\Controllers\admin\ProductController;
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
    return view('admin.pages.dashboard');
});

Route::get('products',[ProductController::class,'index'])->name('products');
Route::post('product-store',[ProductController::class,'store']);
Route::post('product-update/{id}',[ProductController::class,'update']);
Route::post('product-delete/{id}',[ProductController::class,'delete']);

