<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;

class ApprenticeController extends Controller
{
    public function index()
    {
        $apprentices = Apprentice::with(['course', 'computer'])
            ->latest()
            ->get();
        return response()->json($apprentices, 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'cell_number' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
            'computer_id' => 'required|exists:computers,id',
            'urlFoto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validación de imagen
        ]);

        $data = $validated;

        // Subida de foto a Cloudinary si se adjunta
        if ($request->hasFile('urlFoto')) {
            $uploadedFileUrl = $request->file('urlFoto')->storeOnCloudinary('aprendices')->getSecureUrl();
            $data['urlFoto'] = $uploadedFileUrl;
        }

        $apprentice = Apprentice::create($data);

        return response()->json(
            [
                'message' => 'Aprendiz creado exitosamente',
                'data' => $apprentice,
            ],
            201,
        );
    }

    public function show($id)
    {
        $apprentice = Apprentice::with(['course', 'computer'])->find($id);

        if (!$apprentice) {
            return response()->json(['message' => 'Aprendiz no encontrado'], 404);
        }

        return response()->json($apprentice, 200);
    }

    public function update(Request $request, $id)
    {
        $apprentice = Apprentice::find($id);

        if (!$apprentice) {
            return response()->json(['message' => 'Aprendiz no encontrado'], 404);
        }

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|max:255',
            'cell_number' => 'sometimes|required|string|max:255',
            'course_id' => 'sometimes|required|exists:courses,id',
            'computer_id' => 'sometimes|required|exists:computers,id',
            'urlFoto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $validated;

        // Actualizar foto en Cloudinary si se sube una nueva
        if ($request->hasFile('urlFoto')) {
            $uploadedFileUrl = $request->file('urlFoto')->storeOnCloudinary('aprendices')->getSecureUrl();
            $data['urlFoto'] = $uploadedFileUrl;
        }

        $apprentice->update($data);

        return response()->json(
            [
                'message' => 'Aprendiz actualizado exitosamente',
                'data' => $apprentice,
            ],
            200,
        );
    }

    public function destroy($id)
    {
        $apprentice = Apprentice::find($id);

        if (!$apprentice) {
            return response()->json(['message' => 'Aprendiz no encontrado'], 404);
        }

        $apprentice->delete();

        return response()->json(['message' => 'Aprendiz eliminado exitosamente'], 200);
    }
}
