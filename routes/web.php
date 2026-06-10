<?php

use Illuminate\Support\Facades\Route;
use contactformuliertest\Http\Controllers\ContactFormController;

Route::view('/', 'welcome')->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactFormController::class, 'submit'])->name('contact.submit');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
