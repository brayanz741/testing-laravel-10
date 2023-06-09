<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class)->name('home');

// clients/
Route::controller(ClientController::class)->prefix('clients')->group(function () {
    Route::get('/', 'index')->name('clients.index');
    Route::get('/create', 'create')->name('clients.create');
    Route::post('/', 'store')->name('clients.store');
    Route::get('/{client}', 'show')->name('clients.show');
    Route::get('/{client}/edit', 'edit')->name('clients.edit');
    Route::put('/{client}', 'update')->name('clients.update');
});
