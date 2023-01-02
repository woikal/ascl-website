<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

//Route::middleware('auth')->group(function () {
Route::get('administration', DashboardController::class)->name('dashboard');
//});
