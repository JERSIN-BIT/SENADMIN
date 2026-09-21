<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    public function index()
    {
        $areas = Area::all();

        return view('area.index', compact('areas'));
    }

    public function show($id)
    {
        $area = Area::findOrFail($id);

        return view('area.show', compact('area'));
    }

    public function create()
    {
        return view('area.create');
    }

    public function store(Request $request)
    {
        Area::create($request->all());

        return redirect()->route('area.index');
    }

    public function edit(Area $area)
    {
        return view('area.edit', compact('area'));
    }

    public function update(Request $request, Area $area)
    {
        $area->update($request->all());

        return redirect()->route('area.index');
    }

    public function destroy(Area $area)
    {
        $area->delete();

        return redirect()->route('area.index');
    }

    public function apiIndex()
    {
        $areas = Area::all();

        return response()->json($areas);
    }

    public function apiStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $area = Area::create($request->all());

        return response()->json($area, 201);
    }

    public function apiShow($id)
    {
        $area = Area::findOrFail($id);

        return response()->json($area);
    }

    public function apiUpdate(Request $request, $id)
    {
        $area = Area::findOrFail($id);

        $request->validate([
            'name' => 'sometimes|required|string|max:255',
        ]);

        $area->update($request->all());

        return response()->json($area);
    }

    public function apiDestroy($id)
    {
        $area = Area::findOrFail($id);
        $area->delete();

        return response()->json(null, 204);
    }
}
