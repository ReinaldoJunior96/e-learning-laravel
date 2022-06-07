<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ProfessorController;
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
    return view('home');
});

Route::controller(AlunoController::class)->group(function () {
    Route::get('/alunos', 'index');
    Route::get('/alunos/{id}', 'show');
});

Route::controller(ProfessorController::class)->group(function () {
    Route::get('/professores', 'index');
    Route::get('/professores/{id}', 'show');
});
