<?php

use App\Http\Controllers\adminController\AddProductController;
use App\Http\Controllers\adminController\CategorieController;
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
    return view('index.home');
});
Route::get('/admin', function () {
    return view('admin.home');
});

Route::prefix('admin')->group(function () {
    route::get('/category', [CategorieController::class, 'index'])->name('category');
    route::post('category/store',[CategorieController::class, 'store']);
    route::get('/product', [AddProductController::class, 'index'])->name('product');
    route::post('product/store',[AddProductController::class, 'store']);
   
});
