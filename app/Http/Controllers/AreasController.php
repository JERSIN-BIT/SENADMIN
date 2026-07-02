<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aeras;

class AreasController extends Controller
{
    {
    public function create(){
        return view('aeras.create');
    }

    public function store(Request $request){

    $aera = new Aeras();

    $aera = Aeras::create($request->all());

    return $aera;
    }
}
}
