<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('courses', 'public');
        }

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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
        ]);

        if ($request->hasFile('image')) {
            if ($course->image) {
                Storage::disk('public')->delete($course->image);
            }

            $data['image'] = $request->file('image')->store('courses', 'public');
        } else {
            unset($data['image']);
        }

        $course->update($data);

        return redirect()->route('course.index');
    }

    public function destroy(Course $course)
    {
        if ($course->image) {
            Storage::disk('public')->delete($course->image);
        }

        $course->delete();

        return redirect()->route('course.index');
    }

    public function apiIndex()
    {
        $courses = Course::with(['area', 'trainingCenter'])->latest()->get();

        return response()->json($courses);
    }

    public function apiStore(Request $request)
    {
        $request->validate([
            'course_number' => 'required|string|max:255',
            'day' => 'required|string|max:255',
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id',
            'availability_status' => 'required|in:disponible,en curso',
            'duration' => 'required|string|max:255',
            'description' => 'required|string',
            'subjects' => 'required|string',
        ]);

        $course = Course::create($request->all());

        return response()->json($course, 201);
    }

    public function apiShow($id)
    {
        $course = Course::with(['area', 'trainingCenter'])->findOrFail($id);

        return response()->json($course);
    }

    public function apiUpdate(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        $request->validate([
            'course_number' => 'sometimes|required|string|max:255',
            'day' => 'sometimes|required|string|max:255',
            'area_id' => 'sometimes|required|exists:areas,id',
            'training_center_id' => 'sometimes|required|exists:training_centers,id',
            'availability_status' => 'sometimes|required|in:disponible,en curso',
            'duration' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'subjects' => 'sometimes|required|string',
        ]);

        $course->update($request->all());

        return response()->json($course);
    }

    public function apiDestroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return response()->json(null, 204);
    }
}
