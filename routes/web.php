<?php

use App\Http\Controllers\EventRegistrationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('general');
});

Route::prefix('/event')->group(function () {
    Route::get('/', [EventRegistrationController::class, 'index'])->name('event.registrations');
    Route::get('/{event}/register', function () {
        return view('event.registration.create');
    });
    Route::get('/register', function () {
        return view('event.registration.form');
    })->name('registration.show');
    Route::post('/register', [EventRegistrationController::class, 'update'])->name('registration.store');
});
