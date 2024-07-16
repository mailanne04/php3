<?php

use App\Http\Controllers\ClientController;
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
    return view('client.home');
});

Route::get('shop', [ClientController::class, 'shop']);
Route::get('product', [ClientController::class, 'product']);
Route::get('about', [ClientController::class, 'about']);
Route::get('contact', [ClientController::class, 'contact']);
Route::get('cart', [ClientController::class, 'cart']);
Route::get('checkout', [ClientController::class, 'checkout']);
Route::get('dashboard', [ClientController::class, 'dashboard']);
Route::get('profile', [ClientController::class, 'profile']);
Route::get('order', [ClientController::class, 'order']);
Route::get('setting', [ClientController::class, 'setting']);
Route::get('dashboard', [ClientController::class, 'dashboard']);
Route::get('login', [ClientController::class, 'login']);