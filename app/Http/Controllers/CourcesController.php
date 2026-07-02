<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cources;


class CourcesController extends Controller
{
    {
    public function create(){
        return view('cource.create');
    }

    public function store(Request $request){

    $cource = new Cources();

    $cource = Cources::create($request->all());

    return $cource;
    }
}
}
