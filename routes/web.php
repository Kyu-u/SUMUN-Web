<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;

Route::view('/', 'landing')->name('landing');
Route::get('/register',
    [registerController::class,'index'])->name('signup1');
