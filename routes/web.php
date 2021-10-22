<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use App\Http\Controllers\Socialite;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\verif;
use App\Http\Controllers\StorageFileController;
use App\Http\Controllers\HomeController;
use App\Models\User;

Route::get('/',[HomeController::class,'landing'])->name('landing');
Route::get('/register',[registerController::class,'index'])->name('signup1');
Route::get('/forgot',[ForgotPasswordController::class,'index'])->name('forgot');
Route::get('/forgot2',[ForgotPasswordController::class,'index2'])->name('forgot2');
Route::post('/forgot_password',[ForgotPasswordController::class,'postEmail'])->name('emailpassword');
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('/reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
Route::get('/signup2',[registerController::class,'index2'])->name('signup2');
Route::post('/register2',[registerController::class,'store2'])->name('regis2');
Route::get('/signup3',[registerController::class,'index3'])->name('signup3');
Route::get('/signup4',[registerController::class,'index4'])->name('signup4');
Route::post('/regis4',[registerController::class,'store4'])->name('regis4');
Route::get('/signup5',[registerController::class,'index5'])->name('signup5');
Route::post('/regis5',[registerController::class,'store5'])->name('regis5');
Route::get('auth/google/callback', [registerController::class,'handleGoogleCallback'])->name('googleCallback');
Route::get('auth/google', [registerController::class,'redirectToGoogle'])->name('googleRedirect');
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/adminVerif', [AdminController::class, 'verifIndex'])->name('admin.verif');
Route::get('/regisweb', [HomeController::class, 'index'])->name('regisweb');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('account/verify/{token}', [registerController::class, 'verifyAccount'])->name('user.verify'); 
Route::get('/waitemail', [HomeController::class, 'waitemail'])->name('waitemail');
Route::get('/experience', [HomeController::class, 'experience'])->name('experience');
Route::get('/experiencelogin', [HomeController::class, 'experiencelogin'])->name('experiencelogin');
Route::post('/regis6',[registerController::class,'store6'])->name('regis6');
Route::post('/addExp',[LoginController::class,'addExp'])->name('addExp');

/* Login Logout MUN */
Route::get('/login',[LoginController::class,'showLoginForm'])->name('showLoginForm');
Route::POST('/login/user',[LoginController::class,'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout1');

/* REGISTER MUN */
Route::get('/registerMUN',[registerController::class,'registMUN'])->name('registMUN');
Route::POST('/registerMUN/post', [registerController::class,'registMember'])->name('registMUN.post');

/* Admin Verif */
Route::post('/admin/assign', [AdminController::class, 'assignCountry'])->name('assignCountry');
Route::post('/adminVerif-post', [AdminController::class, 'verify'])->name('verify.post');
Route::post('/adminVerif-delete', [AdminController::class, 'delete'])->name('verify.delete');
Route::get('/admin', [AdminController::class, 'adminAssign'])->name('adminAssign');

/* User Verif */
Route::get('/verifMUN', [verif::class, 'MUN'])->name('verifMUN.index');
Route::get('/verifWebinar', [verif::class, 'Webinar'])->name('verifWebinar.index');
Route::POST('/verif/upload', [verif::class,'upload'])->name('verif.post');
Route::get('image/{filename}', [StorageFileController::class,'publicImage'])->name('image.displayImage');

/*NAVBAR*/
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/merch', [HomeController::class, 'merch'])->name('merch');
Route::get('/council', [HomeController::class, 'council'])->name('council');
Route::get('/regisweb', [HomeController::class, 'regisweb'])->name('regisweb');
Route::get('/verifNotRegist', [HomeController::class, 'verifNotRegist'])->name('verifNotRegist');
Route::get('/currentlyRegistered', [HomeController::class, 'currentlyRegistered'])->name('currentlyRegistered');

