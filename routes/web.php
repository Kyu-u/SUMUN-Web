<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Socialite;
use App\Http\Controllers\ForgotPasswordController;

Route::view('/', 'admin')->name('admin');
Route::view('/', 'landing')->name('landing');

Route::get('/register',[registerController::class,'index'])->name('signup1');
Route::get('/login',[LoginController::class,'showLoginForm'])->name('showLoginForm');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/forgot',[ForgotPasswordController::class,'index'])->name('forgot');
Route::get('/forgot2',[ForgotPasswordController::class,'index2'])->name('forgot2');
Route::post('/forgot_password',[ForgotPasswordController::class,'postEmail'])->name('emailpassword');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
Route::get('/signup2',
    [registerController::class,'index2'])->name('signup2');
Route::post('/register2',
    [registerController::class,'store2'])->name('regis2');


Route::get('/signup4',
    [registerController::class,'index4'])->name('signup4');
Route::post('/regis4',
    [registerController::class,'store4'])->name('regis4');

Route::get('/signup3',[registerController::class,'index3'])->name('signup3');

Route::get('auth/google/callback', [registerController::class,'handleGoogleCallback'])->name('googleCallback');

Route::get('auth/google', [registerController::class,'redirectToGoogle'])->name('googleRedirect');

Route::get('/signup3',[registerController::class,'index3'])->name('signup3');

Route::get('/signup5',[registerController::class,'index5'])->name('signup5');

Route::post('/regis5',[registerController::class,'store'])->name('regis5');


Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


