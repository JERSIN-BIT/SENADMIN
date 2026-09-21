<?php

use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TrainingCenterController;
use Illuminate\Support\Facades\Route;

Route::get('areas', [AreaController::class, 'apiIndex']);
Route::post('areas', [AreaController::class, 'apiStore']);
Route::get('areas/{id}', [AreaController::class, 'apiShow']);
Route::put('areas/{id}', [AreaController::class, 'apiUpdate']);
Route::delete('areas/{id}', [AreaController::class, 'apiDestroy']);

Route::get('computers', [ComputerController::class, 'apiIndex']);
Route::post('computers', [ComputerController::class, 'apiStore']);
Route::get('computers/{id}', [ComputerController::class, 'apiShow']);
Route::put('computers/{id}', [ComputerController::class, 'apiUpdate']);
Route::delete('computers/{id}', [ComputerController::class, 'apiDestroy']);

Route::get('courses', [CourseController::class, 'apiIndex']);
Route::post('courses', [CourseController::class, 'apiStore']);
Route::get('courses/{id}', [CourseController::class, 'apiShow']);
Route::put('courses/{id}', [CourseController::class, 'apiUpdate']);
Route::delete('courses/{id}', [CourseController::class, 'apiDestroy']);

Route::get('teachers', [TeacherController::class, 'apiIndex']);
Route::post('teachers', [TeacherController::class, 'apiStore']);
Route::get('teachers/{id}', [TeacherController::class, 'apiShow']);
Route::put('teachers/{id}', [TeacherController::class, 'apiUpdate']);
Route::delete('teachers/{id}', [TeacherController::class, 'apiDestroy']);

Route::get('training-centers', [TrainingCenterController::class, 'apiIndex']);
Route::post('training-centers', [TrainingCenterController::class, 'apiStore']);
Route::get('training-centers/{id}', [TrainingCenterController::class, 'apiShow']);
Route::put('training-centers/{id}', [TrainingCenterController::class, 'apiUpdate']);
Route::delete('training-centers/{id}', [TrainingCenterController::class, 'apiDestroy']);

Route::get('apprentices', [ApprenticeController::class, 'apiIndex']);
Route::post('apprentices', [ApprenticeController::class, 'apiStore']);
Route::get('apprentices/{id}', [ApprenticeController::class, 'apiShow']);
Route::put('apprentices/{id}', [ApprenticeController::class, 'apiUpdate']);
Route::delete('apprentices/{id}', [ApprenticeController::class, 'apiDestroy']);