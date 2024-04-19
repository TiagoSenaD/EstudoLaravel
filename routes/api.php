<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cursos', function(){
    return ["quimica","fisica","historia"];
    });
     
Route::get('/email', function(){
    return [fake()->email,fake()->email,fake()->email];
    });

Route::get('/disciplina/{id?}', [\App\Http\Controllers\DisciplinaController::class, 'listar']);
Route::get('/disciplinas/inscritos', [\App\Http\Controllers\DisciplinaController::class, 'listarInscritos']);

Route::get('/cursos', [\App\Http\Controllers\CursosController::class, 'listar']);
Route::post('/cursos', [\App\Http\Controllers\CursosController::class, 'criaCurso']);
Route::get('/cursos/{id?}', [\App\Http\Controllers\CursosController::class, 'listarCursos']);
Route::put('/cursos/{id?}', [\App\Http\Controllers\CursosController::class, 'atualizarCursos']);
Route::delete('/cursos/{id?}', [\App\Http\Controllers\CursosController::class, 'deletarCursos']);    