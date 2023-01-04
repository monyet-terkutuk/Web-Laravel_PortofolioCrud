<?php

use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

use function PHPUnit\Framework\callback;

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
    return view('home');
});


Route::get('auth', [authController::class, "index"]);

Route::get('/auth/redirect', [authController::class, "redirect"]);

Route::get('/auth/callback', [authController::class, "callback"]);
