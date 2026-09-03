<?php

namespace App\Http\Controllers;

use App\Models\Course;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('dashboard.admin');
    }

    public function aspirante()
    {
        $courses = Course::with(['area', 'trainingCenter'])->latest()->get();

        return view('dashboard.aspirante', compact('courses'));
    }

    public function aprendiz()
    {
        $courses = Course::with(['area', 'trainingCenter'])->latest()->get();

        return view('dashboard.aprendiz', compact('courses'));
    }
}
