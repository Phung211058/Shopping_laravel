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
Route::get('/create', [ProductController::class, 'create']);
Route::post('/create', [ProductController::class, 'store']);
Route::get('/dis-create', [DiscountController::class, 'create']);
Route::get('/discount', [DiscountController::class, 'index']);
Route::post('/discount', [DiscountController::class, 'store']);
Route::get('/fetch_products', [ProductController::class, 'fetch_products']);
Route::delete('/delete-product/{id}', [ProductController::class, 'destroy']);
