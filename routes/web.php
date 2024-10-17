<?php

use App\Http\Controllers\FormCuadraticaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FormCuadraticaController::class, 'viewForm']);
Route::post('/total', [FormCuadraticaController::class, 'FormComplete'])->name(
    'viewForm',
);
