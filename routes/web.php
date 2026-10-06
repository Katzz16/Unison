<?php

use App\Http\Controllers\GigApplicationController;
use Illuminate\Support\Facades\Route;


Route::inertia('/', 'Welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');

    Route::get('gig-applications', [GigApplicationController::class, 'index'])
        ->name('gig-applications.index');
});

require __DIR__.'/settings.php';
