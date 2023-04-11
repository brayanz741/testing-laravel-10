<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::get('/', HomeController::class);

// Cursos
Route::controller(CursoController::class)->prefix('cursos')->group(function () {
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::get('/{curso}', 'show');
});
