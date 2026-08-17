<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('home');
});

Route::get('/insert-student', [StudentController::class, 'insert']);

Route::get('/students', [StudentController::class, 'students']);

Route::get('/insert-more', [StudentController::class, 'insertMore']);


Route::get('/register', [StudentController::class, 'showRegister']);

Route::post('/register', [StudentController::class, 'register']);

Route::get('/students/{id}/edit', [StudentController::class, 'edit']);

Route::put('/students/{id}', [StudentController::class, 'update']);

Route::delete('/students/{id}', [StudentController::class, 'delete']);