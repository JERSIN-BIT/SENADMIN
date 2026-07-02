<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computers;


class ComputersController extends Controller
{
    {
    public function create(){
        return view('computers.create');
    }

    public function store(Request $request){

    $computer = new Computers();

    $computer = Computers::create($request->all());

    return $computer;
    }
}
}
