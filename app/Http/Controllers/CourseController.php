<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Area;
use App\Models\Training_center;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();

        return view('course.index', compact('courses'));
    }

    public function create()
    {
        $areas = Area::all();
        $trainingCenters = Training_center::all();

        return view('course.create', compact('areas', 'trainingCenters'));
    }

    public function store(Request $request)
    {
        Course::create($request->all());

        return redirect()->route('course.index');
    }
   }