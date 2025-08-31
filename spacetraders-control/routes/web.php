<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\DashboardController;

//Route::get('/', function () {
//    return Inertia::render('Dashboard');
//})->name('dashboard');


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('bridge', function () {
    return Inertia::render('Bridge');
})->middleware(['auth', 'verified'])->name('bridge');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
