<?php

use App\Http\Controllers\PostsManagerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostsManagerController::class, 'index']);
Route::post('/', [
    PostsManagerController::class,
    'resultadosIndex',
])->name('getData');
