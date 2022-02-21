<?php

use App\Http\Controllers\UserContoroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//For login page View
Route::view("/login","login");

//For Login page Authentication Check
Route::post('/login',[UserContoroller::class,'login']);

//For Product Data
Route::get('/',[ProductController::class,'index']);

//For Product details get
Route::get('detail/{id}',[ProductController::class,'detail']);

//For Search Text box
Route::get('search',[ProductController::class,'search']);

//For Add to Cart
Route::post('/add_to_cart',[ProductController::class,'add_to_cart']);
