<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DiscountController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProductController::class, 'index']);
Route::get('/get-discounts', [ProductController::class, 'getDiscounts']);
Route::post('/product-create', [ProductController::class, 'store']);
Route::post('/discount-create', [DiscountController::class, 'store']);
Route::get('/discount', [DiscountController::class, 'index']);
Route::get('/fetch-products', [ProductController::class, 'fetch_products']);
Route::get('/fetch-discounts', [DiscountController::class, 'fetch_discounts']);
Route::delete('/delete-product/{id}', [ProductController::class, 'destroy']);
Route::get('/edit-product/{id}',[ProductController::class, 'edit']);
Route::post('/update/{id}', [ProductController::class, 'update']);
Route::get('search-product', [ProductController::class, 'search_products']);
Route::delete('/delete-discount/{id}', [DiscountController::class, 'destroy']);
