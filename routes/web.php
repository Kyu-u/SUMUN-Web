<?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\registerController;


Route::get('/', function () {
	return view('forgot');
});
// Route::view('/', 'forgot')->name('forgot');

// Route::get('/register',
//     [registerController::class,'index'])->name('signup1');

// Route::get('/signup2',
//     [registerController::class,'index2'])->name('signup2');
// Route::post('/register2',
//     [registerController::class,'store2'])->name('regis2');

// Route::get('/signup3',
//     [registerController::class,'index3'])->name('signup3');

// Route::get('/signup4',
//     [registerController::class,'index4'])->name('signup4');
// Route::post('/regis4',
//     [registerController::class,'store4'])->name('regis4');

// Route::get('/signup5',
//     [registerController::class,'index5'])->name('signup5');
// Route::post('/regis5',
//     [registerController::class,'store'])->name('regis5');

