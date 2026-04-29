<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;
use App\Models\Course;



class ConsultaController extends Controller
{
    public function consulta1(){
        $course = Apprentice::find(1);
        return $course->course;
    }





}
