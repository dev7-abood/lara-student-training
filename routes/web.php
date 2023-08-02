<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
    Route::get('/create/{lang}', [\App\Http\Controllers\ProductController::class, 'create'])->name('create');
    Route::post('/store', [\App\Http\Controllers\ProductController::class, 'store'])->name('store');
});

use App\Models\Category;
use App\Models\Product;

Route::get('/products', function () {
   return Product::where('name', 'bag 1')->first()->categories;
   return Category::find(1)->products;
});
