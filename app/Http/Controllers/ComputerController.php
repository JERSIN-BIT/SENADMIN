<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    public function index()
    {
        $computers = Computer::all();
        return view('computer.index', compact('computers'));
    }

    public function show($id)
    {
        $computer = Computer::findOrFail($id);
        return view('computer.show', compact('computer'));
    }

    public function create()
    {
        return view('computer.create');
    }

    public function store(Request $request)
    {
        Computer::create($request->all());
        return redirect()->route('computer.index');
    }

    public function edit(Computer $computer)
    {
        return view('computer.edit', compact('computer'));
    }

    public function update(Request $request, Computer $computer)
    {
        $computer->update($request->all());
        return redirect()->route('computer.index');
    }

    public function destroy(Computer $computer)
    {
        $computer->delete();
        return redirect()->route('computer.index');
    }

    public function apiIndex()
    {
        $computers = Computer::all();
        return response()->json($computers);
    }

    public function apiStore(Request $request)
    {
        $request->validate([
            'number' => 'required',
            'brand' => 'required|max:255',
        ]);

        $computer = Computer::create($request->all());
        return response()->json($computer, 201);
    }

    public function apiShow($id)
    {
        $computer = Computer::findOrFail($id);

        return response()->json($computer);
    }

    public function apiUpdate(Request $request, $id)
    {
        $computer = Computer::findOrFail($id);

        $request->validate([
            'number' => 'sometimes|required',
            'brand' => 'sometimes|required|max:255',
        ]);

        $computer->update($request->all());

        return response()->json($computer);
    }

    public function apiDestroy($id)
    {
        $computer = Computer::findOrFail($id);
        $computer->delete();

        return response()->json(null, 204);
    }
}
