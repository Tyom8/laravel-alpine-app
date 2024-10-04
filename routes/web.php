<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\SetLocale;

// Apply the middleware to a group of routes
Route::middleware([SetLocale::class])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/about', function () {
        return view('about'); // Point this to your 'about' view
    })->name('about');

    Route::get('/contact', function () {
        return view('contact'); // Point this to your 'contact' view
    })->name('contact');

    Route::get('/lang/{locale}', function ($locale) {
        session(['app_locale' => $locale]);
        return redirect()->back();
    });

    // Define other routes that require locale settings here
});
