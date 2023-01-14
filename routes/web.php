<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PageSettingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Auth;
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

Route::redirect('home', 'dashboard');

Route::get('auth', [authController::class, "index"])->name('login')->middleware('guest');

Route::get('/auth/redirect', [authController::class, "redirect"])->middleware('guest');

Route::get('/auth/callback', [authController::class, "callback"])->middleware('guest');

Route::get('/auth/logout', [authController::class, "logout"])->middleware('auth');



Route::prefix('/dashboard')->middleware('auth')->group(
    function () {
        Route::get('/home', function () {
            return view("dashboard.index", [
                'title' => 'Home'
            ]);
        });
        // Route::get('/', [PageController::class, 'index']);
        Route::resource('/page', PageController::class);
        Route::resource('/experience', ExperienceController::class);
        Route::resource('/education', EducationController::class);
        // Route Skill
        Route::get('/skill', [SkillController::class, "index"])->name('skill.index');
        Route::post('/skill', [SkillController::class, "update"])->name('skill.update');
        // Route Profile
        Route::get('/profile', [ProfileController::class, "index"])->name('profile.index');
        Route::post('/profile', [ProfileController::class, "update"])->name('profile.update');
        // Route Seting
        Route::get('/setting', [PageSettingController::class, "index"])->name('setting.index');
        Route::post('/setting', [PageSettingController::class, "update"])->name('setting.update');
    }
);
