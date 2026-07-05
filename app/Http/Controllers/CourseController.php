<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Area;
use App\Models\Training_center;



class CourseController extends Controller
{
    
    public function create(){

    $areas = Area::all();
    $trainingcenters = Training_center::all();

        return view('course.create', compact('areas', 'trainingcenters'));
    }

    public function store(Request $request){

    $courses = new Course();

    $courses = Course::create($request->all());

    return $courses;
    }
}




        