<?php

use Illuminate\Support\Facades\Route;

Route::domain('{domain}.' . config('app.domain'))->group(function () {

    Route::get('/', \App\Http\Controllers\WelcomeController::class);

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    require __DIR__ . '/auth.php';
});
