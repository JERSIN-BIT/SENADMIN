<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;
use App\Models\Course;
use App\Models\Computer;

class ApprenticeController extends Controller
{
    public function index()
    {
        $apprentices = Apprentice::all();

        return view('apprentice.index', compact('apprentices'));
    }

    public function show($id)
    {
        $apprentice = Apprentice::findOrFail($id);

        return view('apprentice.show', compact('apprentice'));
    }

    public function create()
    {
        $courses = Course::all();
        $computers = Computer::all();

        return view('apprentice.create', compact('courses', 'computers'));
    }

    public function store(Request $request)
    {
        Apprentice::create($request->all());

        return redirect()->route('apprentice.index');
    }

    public function edit(Apprentice $apprentice)
    {
        $courses = Course::all();
        $computers = Computer::all();

        return view('apprentice.edit', compact('apprentice', 'courses', 'computers'));
    }

    public function update(Request $request, Apprentice $apprentice)
    {
        $apprentice->update($request->all());

        return redirect()->route('apprentice.index');
    }

    public function destroy(Apprentice $apprentice)
    {
        $apprentice->delete();

        return redirect()->route('apprentice.index');
    }

    public function apiIndex()
    {
        $apprentices = Apprentice::with(['course', 'computer'])->latest()->get();

        return response()->json($apprentices);
    }

    public function apiStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'cell_number' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
            'computer_id' => 'required|exists:computers,id',
        ]);

        $apprentice = Apprentice::create($request->all());

        return response()->json($apprentice, 201);
    }

    public function apiShow($id)
    {
        $apprentice = Apprentice::with(['course', 'computer'])->findOrFail($id);

        return response()->json($apprentice);
    }

    public function apiUpdate(Request $request, $id)
    {
        $apprentice = Apprentice::findOrFail($id);

        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|max:255',
            'cell_number' => 'sometimes|required|string|max:255',
            'course_id' => 'sometimes|required|exists:courses,id',
            'computer_id' => 'sometimes|required|exists:computers,id',
        ]);

        $apprentice->update($request->all());

        return response()->json($apprentice);
    }

    public function apiDestroy($id)
    {
        $apprentice = Apprentice::findOrFail($id);
        $apprentice->delete();

        return response()->json(null, 204);
    }
}
