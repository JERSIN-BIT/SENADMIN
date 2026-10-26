<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training_center;

class TrainingCenterController extends Controller
{
    // MOSTRAR TODOS LOS CENTROS DE FORMACIÓN
    public function index()
    {
        $trainingCenters = Training_center::all();
        return response()->json($trainingCenters, 200);
    }

    // GUARDAR UN CENTRO DE FORMACIÓN
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        $trainingCenter = Training_center::create($validated);

        return response()->json(
            [
                'message' => 'Centro de formación creado exitosamente',
                'data' => $trainingCenter,
            ],
            201,
        );
    }

    // MOSTRAR UN CENTRO ESPECÍFICO
    public function show($id)
    {
        $trainingCenter = Training_center::findOrFail($id);
        return response()->json($trainingCenter, 200);
    }

    // ACTUALIZAR UN CENTRO DE FORMACIÓN
    public function update(Request $request, $id)
    {
        $trainingCenter = Training_center::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'location' => 'sometimes|required|string|max:255',
        ]);

        $trainingCenter->update($validated);

        return response()->json(
            [
                'message' => 'Centro de formación actualizado exitosamente',
                'data' => $trainingCenter,
            ],
            200,
        );
    }

    // ELIMINAR UN CENTRO DE FORMACIÓN
    public function destroy($id)
    {
        $trainingCenter = Training_center::findOrFail($id);
        $trainingCenter->delete();

        return response()->json(
            [
                'message' => 'Eliminado correctamente',
            ],
            200,
        );
    }
}
