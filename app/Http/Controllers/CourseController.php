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
        $data = $request->validate([
            'course_number' => 'required|string|max:255',
            'day' => 'required|string|max:255',
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id',
            'availability_status' => 'required|in:disponible,en curso',
            'duration' => 'required|string|max:255',
            'description' => 'required|string',
            'subjects' => 'required|string',
        ]);

        Course::create($data);

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
        $data = $request->validate([
            'course_number' => 'required|string|max:255',
            'day' => 'required|string|max:255',
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id',
            'availability_status' => 'required|in:disponible,en curso',
            'duration' => 'required|string|max:255',
            'description' => 'required|string',
            'subjects' => 'required|string',
        ]);

        $course->update($data);

        return redirect()->route('course.index');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('course.index');
    }
}
