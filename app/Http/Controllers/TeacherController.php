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

    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);

        return view('teacher.show', compact('teacher'));
    }

    public function create()
    {
        $areas = Area::all();
        $training_centers = Training_center::all();

        return view('teacher.create', compact('areas', 'training_centers'));
    }

    public function store(Request $request)
    {
        Teacher::create($request->all());

        return redirect()->route('teacher.index');
    }

    public function edit(Teacher $teacher)
    {
        $areas = Area::all();
        $training_centers = Training_center::all();

        return view('teacher.edit', compact('teacher', 'areas', 'training_centers'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $teacher->update($request->all());

        return redirect()->route('teacher.index');
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect()->route('teacher.index');
    }

    public function apiIndex()
    {
        $teachers = Teacher::all();

        return response()->json($teachers);
    }

    public function apiStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id',
        ]);

        $teacher = Teacher::create($request->all());

        return response()->json($teacher, 201);
    }
}
