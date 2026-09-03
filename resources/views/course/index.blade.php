@extends('layouts.app')

@section('content')
    <div class="container course-list">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <span class="eyebrow">Oferta formativa</span>
                <h1>Formaciones disponibles</h1>
            </div>

            @auth
                @if (auth()->user()->isAdmin())
                    <a href="{{ route('course.create') }}" class="btn btn-success">+ Nueva formación</a>
                @endif
            @endauth

        </div>

        <table class="table table-striped table-bordered">

            <thead>
                <tr>
                    <th>Programa</th>
                    <th>Jornada</th>
                    <th>Área</th>
                    <th>Centro de formación</th>
                    <th>Detalle</th>
                    @if (auth()->user()->isAdmin())
                        <th>Acciones</th>
                    @endif
                </tr>
            </thead>

            <tbody>

                @forelse($courses as $course)
                    <tr>

                        <td>{{ $course->course_number }}</td>
                        <td>{{ $course->day }}</td>
                        <td>{{ $course->area->name ?? 'Sin área' }}</td>
                        <td>{{ $course->trainingCenter->name ?? 'Sin centro' }}</td>

                        <td>
                            <a href="{{ route('course.show', $course->id) }}" class="btn btn-info btn-sm text-white">
                                Mostrar
                            </a>
                        </td>

                        @if (auth()->user()->isAdmin())
                            <td>
                                <a href="{{ route('course.edit', $course->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                <form class="d-inline" action="{{ route('course.destroy', $course->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar esta formación?')">Eliminar</button>
                                </form>
                            </td>
                        @endif

                    </tr>

                @empty

                    <tr>
                        <td colspan="{{ auth()->user()->isAdmin() ? 6 : 5 }}" class="text-center">
                            No hay cursos registrados.
                        </td>
                    </tr>
                @endforelse

            </tbody>

        </table>

    </div>
@endsection
