<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return response()->json($teachers, 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'urlFoto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $validated;

        if ($request->hasFile('urlFoto')) {
            $uploadedFileUrl = $request->file('urlFoto')->storeOnCloudinary('instructores')->getSecureUrl();
            $data['urlFoto'] = $uploadedFileUrl;
        }

        $teacher = Teacher::create($data);

        return response()->json(
            [
                'message' => 'Instructor creado exitosamente',
                'data' => $teacher,
            ],
            201,
        );
    }

    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return response()->json($teacher, 200);
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|max:255',
            'urlFoto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $validated;

        if ($request->hasFile('urlFoto')) {
            $uploadedFileUrl = $request->file('urlFoto')->storeOnCloudinary('instructores')->getSecureUrl();
            $data['urlFoto'] = $uploadedFileUrl;
        }

        $teacher->update($data);

        return response()->json(
            [
                'message' => 'Instructor actualizado exitosamente',
                'data' => $teacher,
            ],
            200,
        );
    }

    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return response()->json(['message' => 'Eliminado correctamente'], 200);
    }
}
