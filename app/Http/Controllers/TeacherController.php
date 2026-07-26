<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Area;
use App\Models\Training_center;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();

        return view('teacher.index', compact('teachers'));
    }

    public function create(){

    $areas = Area::all();
    $trainingCenters = Training_center::all();

    return view('teacher.create', compact('areas', 'trainingCenters'));
}

    public function store(Request $request)
    {
        Teacher::create($request->all());

        return redirect()->route('teacher.index');
    }
}