<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\UserController;

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

// =======================ADMIN============================
// Route::middleware('LoginAdminCheck')->group(function () {
    Route::get('/', [ProductController::class, 'index']);           // view
    // ____________________________Product______________________
    Route::get('/fetch-products', [ProductController::class, 'fetch_products']);            // show all products using ajax
    Route::post('/product-create', [ProductController::class, 'store']);                        // create product
    Route::get('/get-discounts', [ProductController::class, 'getDiscounts']);               // load disscount to product
    Route::get('/edit-product/{id}',[ProductController::class, 'edit']);                          // edit product
    Route::post('/update-product/{id}', [ProductController::class, 'update']);              // update product
    Route::delete('/delete-product/{id}', [ProductController::class, 'destroy']);           // delete product
    Route::get('search-product', [ProductController::class, 'search_products']);            // search product
    // Route::get('/discount', [DiscountController::class, 'index']);             
    // __________________________Discount________________________                   
    Route::get('/fetch-discounts', [DiscountController::class, 'fetch_discounts']);         // show all discounts
    Route::post('/discount-create', [DiscountController::class, 'store']);                      // create discount
    Route::get('/edit-discount/{id}',[DiscountController::class, 'edit']);                      // edit discount
    Route::post('/update-discount/{id}', [DiscountController::class, 'update']);            // update discount
    Route::delete('/delete-discount/{id}', [DiscountController::class, 'destroy']);         // delete discount

// });


// ========================Client==============================
Route::get('/home', [ProductController::class, 'home']);                                 // home page client
Route::get('/details/{id}', [ProductController::class, 'product_detail']);          // product detail page client




// ========================Account============================
Route::group(['prefix' => 'admin'], function(){
    Route::get('/login', [UserController::class, 'viewLogin']); // login page admin
    Route::get('/register', [UserController::class, 'viewRegister']); // register page admin
    Route::post('/register', [UserController::class, 'store']); // register admin account
    Route::post('/login', [UserController::class, 'login']); // login admin account

});
