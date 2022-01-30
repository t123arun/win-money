<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\winMoney;
use App\Http\Controllers\contractMoney;
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

// Route::get('/',[winMoney::class,'index']);

Route::get('/',[winMoney::class,'list']);
Route::post('/',[contractMoney::class,'getData']);