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
        $courses = Course::with(['area', 'trainingCenter'])->latest()->get();

        return view('course.index', compact('courses'));
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);

        return view('course.show', compact('course'));
    }

    public function create()
    {
        $areas = Area::all();
        $training_centers = Training_center::all();

        return view('course.create', compact('areas', 'training_centers'));
    }

    public function store(Request $request)
    {
        Course::create($request->all());

        return redirect()->route('course.index');
    }

    public function edit(Course $course)
    {
        $areas = Area::all();
        $training_centers = Training_center::all();

        return view('course.edit', compact('course', 'areas', 'training_centers'));
    }

    public function update(Request $request, Course $course)
    {
        $course->update($request->all());

        return redirect()->route('course.index');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('course.index');
    }
}
