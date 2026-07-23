<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TrainingCenterController;


// Apprentice
Route::get('apprentice/list',[ApprenticeController::class,'index']);
Route::get('apprentice/create',[ApprenticeController::class,'create'])->name('apprentice.create');
Route::post('apprentice/store',[ApprenticeController::class,'store'])->name('apprentice.store');

// Area
Route::get('area/list',[AreaController::class,'index']);
Route::get('area/create',[AreaController::class,'create'])->name('area.create');
Route::post('area/store',[AreaController::class,'store'])->name('area.store');

// Computer
Route::get('computer/list',[ComputerController::class,'index']);
Route::get('computer/create',[ComputerController::class,'create'])->name('computer.create');
Route::post('computer/store',[ComputerController::class,'store'])->name('computer.store');

// Course
Route::get('course/list',[CourseController::class,'index']);
Route::get('course/create',[CourseController::class,'create'])->name('course.create');
Route::post('course/store',[CourseController::class,'store'])->name('course.store');

// Teacher
Route::get('teacher/list',[TeacherController::class,'index']);
Route::get('teacher/create',[TeacherController::class,'create'])->name('teacher.create');
Route::post('teacher/store',[TeacherController::class,'store'])->name('teacher.store');

// Training Center
Route::get('trainingcenter/list',[TrainingCenterController::class,'index']);
Route::get('trainingcenter/create',[TrainingCenterController::class,'create'])->name('trainingcenter.create');
Route::post('trainingcenter/store',[TrainingCenterController::class,'store'])->name('trainingcenter.store');