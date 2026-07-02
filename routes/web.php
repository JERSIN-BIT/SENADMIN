<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\ApprenticesController;
use App\Http\Controllers\AerasController;
use App\Http\Controllers\ComputersController;
use App\Http\Controllers\CourcesController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\TrainingCentersController;



Route::get('apprentices/create', [ApprenticesController::class, 'create']);
Route::post('apprentices/store', [ApprenticesController::class, 'store'])->name('apprentices.store');

Route::get('aeras/create', [AerasController::class, 'create']);
Route::post('aeras/store', [AerasController::class, 'store'])->name('aeras.store');

Route::get('computers/create', [ComputersController::class, 'create']);
Route::post('computers/store', [ComputersController::class, 'store'])->name('computers.store');

Route::get('cource/create', [CourcesController::class, 'create']);
Route::post('cource/store', [CourcesController::class, 'store'])->name('cource.store');

Route::get('teacher/create', [TeachersController::class, 'create']);
Route::post('teacher/store', [TeachersController::class, 'store'])->name('teacher.store');

Route::get('trainingcenter/create', [TrainingCentersController::class, 'create']);
Route::post('trainingcenter/store', [TrainingCentersController::class, 'store'])->name('trainingcenter.store');