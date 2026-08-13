<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training_center;

class TrainingCenterController extends Controller
{
    public function index()
    {
        $trainingCenters = Training_center::all();

        return view('training_center.index', compact('trainingCenters'));
    }

    public function show($id)
    {
        $trainingCenter = Training_center::findOrFail($id);

        return view('training_center.show', compact('trainingCenter'));
    }

    public function create()
    {
        return view('training_center.create');
    }

    public function store(Request $request)
    {
        Training_center::create($request->all());

        return redirect()->route('trainingcenter.index');
    }

    public function edit(Training_center $trainingCenter)
    {
        return view('training_center.edit', compact('trainingCenter'));
    }

    public function update(Request $request, Training_center $trainingCenter)
    {
        $trainingCenter->update($request->all());

        return redirect()->route('trainingcenter.index');
    }

    public function destroy(Training_center $trainingCenter)
    {
        $trainingCenter->delete();

        return redirect()->route('trainingcenter.index');
    }
}
