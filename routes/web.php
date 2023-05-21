<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\EventParticipationController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TeamVisibilityController;
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
    return view('layout.general');
})->name('home');

Route::resource('locations', LocationController::class);
Route::resource('events', LocationController::class);
Route::get('event/{id}/anmelden', [EventParticipationController::class, 'create']);


Route::patch('teams/{team}/visibility', [TeamVisibilityController::class, 'update'])->name('teams.visibility');
Route::resource('teams', TeamController::class)->except(['show']);

Route::resource('addresses', AddressController::class)->except(['show', 'create', 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

