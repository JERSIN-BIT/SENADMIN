<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingCenters;


class TrainingCentersController extends Controller
{
    {
    public function create(){
        return view('trainingcenter.create');
    }

    public function store(Request $request){

    $trainingcenter = new TrainingCenters();

    $trainingcenter = TrainingCenters::create($request->all());

    return $trainingcenter;
    }
}
}
