<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[HomeController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);
Route::get('/student', [StudentController::class, 'index']);
Route::get('/student/tambah', [StudentController::class, 'create']);
Route::post('/student/store', [StudentController::class, 'store']);
Route::get('/grade', [GradeController::class, 'index']);



