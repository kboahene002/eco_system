<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mobile', function () {
    return view('mobile-app');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/loan', function () {
    return view('loan');
});
Route::get('/contact', function () {
    return view('contact_us');
});

Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');

Route::get('/otp/{email}', function ($email) {
    // dd(decrypt($email));
    return view('otp' , ['email' => decrypt($email )]);
})->name('otp')->middleware('guest');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::get('/logout' , function () {
    Auth::logout(); // logs out the user

    // destroy session
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/login')->with('status', 'You have been logged out successfully.');
})->name('')->middleware('auth');
