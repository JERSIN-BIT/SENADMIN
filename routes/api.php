<?php

use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TrainingCenterController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get('computers', [ComputerController::class, 'apiIndex']);
    Route::post('computers', [ComputerController::class, 'apiStore']);

    Route::get('areas', [AreaController::class, 'apiIndex']);
    Route::post('areas', [AreaController::class, 'apiStore']);

    Route::get('courses', [CourseController::class, 'apiIndex']);
    Route::post('courses', [CourseController::class, 'apiStore']);

    Route::get('teachers', [TeacherController::class, 'apiIndex']);
    Route::post('teachers', [TeacherController::class, 'apiStore']);

    Route::get('training-centers', [TrainingCenterController::class, 'apiIndex']);
    Route::post('training-centers', [TrainingCenterController::class, 'apiStore']);

    Route::get('apprentices', [ApprenticeController::class, 'apiIndex']);
    Route::post('apprentices', [ApprenticeController::class, 'apiStore']);
});
