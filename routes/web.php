<?php

namespace App\Http\Controllers;
/* مهم */  
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
 




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

Route::get('/',[PagesController::class,'index'] );
Route::resource('/blog',PlogController::class);
Route::get('/home', [PagesController::class,'home'] );
Route::get('/product', [ProductController::class,'product'] )->name('product.pro');
Route::get('/product/create', [ProductController::class,'create'] )->name('product.ctret');;
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');

 
 