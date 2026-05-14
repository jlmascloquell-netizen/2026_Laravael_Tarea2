<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing.index')->name('home');
Route::view('/services', 'landing.services')->name('services');
Route::view('/contact', 'landing.contact')->name('contact');
