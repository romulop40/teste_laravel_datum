<?php

use App\Http\Controllers\AlunosController;
use App\Http\Controllers\EducacaoController;
use App\Http\Controllers\Saudacao;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [EducacaoController::class, 'index'])->name('home');
Route::get('/sobre', [EducacaoController::class, 'sobre']);
Route::get('/contato', [EducacaoController::class, 'contato']);
Route::get('/alunos', [AlunosController::class, 'index'])->name('index');
Route::get('/alunos/create', [AlunosController::class, 'create'])->name('create');
Route::get('/alunos/{id}', [AlunosController::class, 'show'])->name('show');
Route::post('/alunos', [AlunosController::class, 'store'])->name('store');
Route::get('/alunos/{id}/edit', [AlunosController::class, 'edit'])->name('edit');
Route::put('/alunos/{id}', [AlunosController::class, 'update'])->name('update');
Route::delete('/alunos/{id}', [AlunosController::class, 'destroy'])->name('destroy');
