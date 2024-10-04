<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // You can point this to your homepage view
})->name('home');

Route::get('/about', function () {
    return view('about'); // Point this to your 'about' view
})->name('about');

Route::get('/contact', function () {
    return view('contact'); // Point this to your 'contact' view
})->name('contact');
