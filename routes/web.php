<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VagaController;

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
    return view('welcome');
});

// Route::get('/vaga', [VagaController::class, 'index']);
// Route::get('/vaga/adicionar', [VagaController::class, 'create']);
// Route::get('/vaga/editar', [VagaController::class, 'edit']);
// Route::get('/vaga/show', [VagaController::class, 'show']);

Route::resource('vaga', VagaController::class);
