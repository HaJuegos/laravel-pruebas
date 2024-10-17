<?php

use App\Http\Controllers\FormCuadraticaController;
use App\Http\Controllers\PostsManagerController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FormCuadraticaController::class, 'viewForm']);
Route::post('/total', [FormCuadraticaController::class, 'FormComplete'])->name(
    'viewForm',
);

Route::get('/prueba', [PostsManagerController::class, 'index']);
Route::post('/prueba', [
    PostsManagerController::class,
    'resultadosIndex',
])->name('getData');
