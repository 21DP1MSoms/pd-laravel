<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/test', [CourseController::class, 'test']);
Route::post('/course', [CourseController::class, 'store']);
Route::get('/course', [CourseController::class, 'index']);