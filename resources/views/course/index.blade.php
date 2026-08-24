@extends('layouts.app')

@section('content')
    <div class="container course-list">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h1>LISTAR CURSOS</h1>

            <a href="{{ route('course.create') }}" class="btn btn-success">
                + Nuevo curso
            </a>

        </div>

        <table class="table table-striped table-bordered">

            <thead>
                <tr>
                    <th>Id</th>
                    <th>Número del curso</th>
                    <th>Jornada</th>
                    <th>Área</th>
                    <th>Centro</th>
                    <th>Detalle</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>

                @forelse($courses as $course)
                    <tr>

                        <td>{{ $course->id }}</td>
                        <td>{{ $course->course_number }}</td>
                        <td>{{ $course->day }}</td>
                        <td>{{ $course->area_id }}</td>
                        <td>{{ $course->training_center_id }}</td>

                        <td>
                            <a href="{{ route('course.show', $course->id) }}" class="btn btn-info btn-sm text-white">
                                Mostrar
                            </a>
                        </td>

                        <td>
                            <a href="{{ route('course.edit', $course->id) }}" class="btn btn-warning btn-sm">
                                Editar
                            </a>
                        </td>

                        <td>
                            <form action="{{ route('course.destroy', $course->id) }}" method="POST">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Seguro que deseas eliminar este curso?')">
                                    Eliminar
                                </button>

                            </form>
                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="8" class="text-center">
                            No hay cursos registrados.
                        </td>
                    </tr>
                @endforelse

            </tbody>

        </table>

    </div>
@endsection
