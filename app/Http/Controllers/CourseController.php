<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    // MOSTRAR TODOS LOS CURSOS (Con sus relaciones)
    public function index()
    {
        $courses = Course::with(['area', 'trainingCenter'])
            ->latest()
            ->get();
        return response()->json($courses, 200);
    }

    // GUARDAR UN CURSO (Soporta imagen en Cloudinary)
    public function store(Request $request)
    {
        $data = $request->validate([
            'course_number' => 'required|string|max:255',
            'day' => 'required|string|max:255',
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id',
            'availability_status' => 'required|in:disponible,en curso',
            'duration' => 'required|string|max:255',
            'description' => 'required|string',
            'subjects' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
        ]);

        // Subir imagen a Cloudinary si se adjunta
        if ($request->hasFile('image')) {
            $uploadedFileUrl = $request->file('image')->storeOnCloudinary('cursos')->getSecureUrl();
            $data['image'] = $uploadedFileUrl;
        }

        $course = Course::create($data);

        return response()->json(
            [
                'message' => 'Curso creado exitosamente',
                'data' => $course,
            ],
            201,
        );
    }

    // MOSTRAR UN CURSO ESPECÍFICO
    public function show($id)
    {
        $course = Course::with(['area', 'trainingCenter'])->findOrFail($id);
        return response()->json($course, 200);
    }

    // ACTUALIZAR UN CURSO
    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        $data = $request->validate([
            'course_number' => 'sometimes|required|string|max:255',
            'day' => 'sometimes|required|string|max:255',
            'area_id' => 'sometimes|required|exists:areas,id',
            'training_center_id' => 'sometimes|required|exists:training_centers,id',
            'availability_status' => 'sometimes|required|in:disponible,en curso',
            'duration' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'subjects' => 'sometimes|required|string',
            'image' => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
        ]);

        // Actualizar imagen en Cloudinary si se sube una nueva
        if ($request->hasFile('image')) {
            $uploadedFileUrl = $request->file('image')->storeOnCloudinary('cursos')->getSecureUrl();
            $data['image'] = $uploadedFileUrl;
        } else {
            unset($data['image']);
        }

        $course->update($data);

        return response()->json(
            [
                'message' => 'Curso actualizado exitosamente',
                'data' => $course,
            ],
            200,
        );
    }

    // ELIMINAR UN CURSO
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return response()->json(
            [
                'message' => 'Eliminado correctamente',
            ],
            200,
        );
    }
}
