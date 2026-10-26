<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    /* 
    public function consultaAprendiz(){
        $compu = Computer::find(3);
        return response()->json($compu->aprendices, 200);
    } 
    */

    // MOSTRAR TODOS LOS DATOS
    public function index()
    {
        $computers = Computer::all();
        return response()->json($computers, 200);
    }

    // GUARDAR DATOS (Con soporte para Cloudinary)
    public function store(Request $request) 
    {
        $validated = $request->validate([
            'number' => 'required|numeric',
            'brand' => 'required|string|max:225',
            'urlFoto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $validated;

        // Subida de imagen a Cloudinary si se adjunta un archivo
        if ($request->hasFile('urlFoto')) {
            $uploadedFileUrl = $request->file('urlFoto')->storeOnCloudinary('computadores')->getSecureUrl();
            $data['urlFoto'] = $uploadedFileUrl;
        }

        $computer = Computer::create($data);

        return response()->json([
            'message' => 'Computador creado exitosamente',
            'data' => $computer
        ], 201);
    }

    // MOSTRAR UN REGISTRO
    public function show($id) 
    {
        $computer = Computer::findOrFail($id);
        return response()->json($computer, 200);
    }

    // ACTUALIZAR UN REGISTRO (Con soporte para Cloudinary)
    public function update(Request $request, $id) 
    {
        $computer = Computer::findOrFail($id);

        $validated = $request->validate([
            'number' => 'required|numeric',
            'brand' => 'required|string|max:225',
            'urlFoto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $validated;

        // Actualizar la foto en Cloudinary si se sube una nueva
        if ($request->hasFile('urlFoto')) {
            $uploadedFileUrl = $request->file('urlFoto')->storeOnCloudinary('computadores')->getSecureUrl();
            $data['urlFoto'] = $uploadedFileUrl;
        }

        $computer->update($data);

        return response()->json([
            'message' => 'Computador actualizado exitosamente',
            'data' => $computer
        ], 200);
    }

    // ELIMINAR UN REGISTRO
    public function destroy($id) 
    {
        $computer = Computer::findOrFail($id);
        $computer->delete();

        return response()->json([
            'message' => 'Eliminado correctamente'
        ], 200);
    }
}