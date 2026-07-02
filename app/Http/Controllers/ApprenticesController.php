<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentices;

class ApprenticesController extends Controller
{
    {
    public function create(){
        return view('apprentices.create');
    }

    public function store(Request $request){

    $apren = new Apprentices();

    $apren = Apprentices::create($request->all());

    return $apren;
    }
}
}
