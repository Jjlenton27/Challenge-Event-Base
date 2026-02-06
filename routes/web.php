<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use App\Http\Controllers\AIAPIController;

Route::get('/', function () {
    return Inertia::render('welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('askAI', function () {
    return Inertia::render('askAI');
})->middleware(['auth', 'verified'])->name('askAI');

Route::get('testai', [AIAPIController::class, 'AskAI']);

require __DIR__.'/settings.php';
