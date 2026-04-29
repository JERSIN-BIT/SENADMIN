<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultaController;

Route::get('/consulta1',[ConsultaController::class,'consulta1']);