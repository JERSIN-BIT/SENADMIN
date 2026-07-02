<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teachers;


class TeachersController extends Controller
{
    {
    public function create(){
        return view('teacher.create');
    }

    public function store(Request $request){

    $teacher = new Teachers();

    $teacher = Teachers::create($request->all());

    return $teacher;
    }
}
}
