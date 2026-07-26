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

    public function create()
{
    return view('training_center.create');
}
    public function store(Request $request)
    {
        Training_center::create($request->all());

        return redirect()->route('trainingcenter.index');
    }
}