<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;

Route::view('/', 'landing')->name('landing');
Route::get('/register',
    [registerController::class,'index'])->name('signup1');
Route::get('/register2',
    [registerController::class,'index2'])->name('signup2');
Route::post('/register2',
    [registerController::class,'store'])->name('regis2');
Route::get('/register3',
    [registerController::class,'index3'])->name('signup3');
Route::get('/register4',
    [registerController::class,'index4'])->name('signup4');
Route::get('/register5',
    [registerController::class,'index5'])->name('signup5');

// Route::get('/register', 'RegistrationController@create');
// Route::post('/register', 'RegistrationController@store');
// Route::get('/login', 'LoginController@create');
// Route::post('/login', 'LoginController@store');
// Route::get('/logout', 'LoginController@destroy');