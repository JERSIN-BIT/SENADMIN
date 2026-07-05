<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Area;
use App\Models\Training_center;

class TeacherController extends Controller
{
    
    public function create(){

    $areas = Area::all();
    $trainingcenters = Training_center::all();

        return view('teacher.create', compact('areas', 'trainingcenters'));
    }

    public function store(Request $request){

    $teacher = new Teacher();

    $teacher = Teacher::create($request->all());

    return $teacher;
    }

}
