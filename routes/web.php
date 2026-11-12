<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/szolgaltatasok', 'pages.services')->name('services');
Route::view('/rolam', 'pages.about')->name('about');
Route::view('/galeria', 'pages.gallery')->name('gallery');
Route::view('/velemenyek', 'pages.reviews')->name('reviews');

Route::get('/kapcsolat', [ContactController::class, 'show'])->name('contact.show');
Route::post('/kapcsolat', [ContactController::class, 'store'])->name('contact.store');

Route::view('/impresszum', 'pages.legal.imprint')->name('legal.imprint');
Route::view('/adatvedelem', 'pages.legal.privacy')->name('legal.privacy');
