<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('dashboard.admin');
    }

    public function aspirante()
    {
        return view('dashboard.aspirante');
    }

    public function aprendiz()
    {
        return view('dashboard.aprendiz');
    }
}
