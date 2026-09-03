@extends('layouts.app')

@section('content')
    <div class="container">

        <span class="eyebrow">Oferta formativa</span>
        <h1>Detalle de la formación</h1>

        <div class="card">

            <div class="card-body">

                <p><strong>Programa:</strong> {{ $course->course_number }}</p>
                <p><strong>Jornada:</strong> {{ $course->day }}</p>
                <p><strong>Área:</strong> {{ $course->area->name ?? 'Sin área' }}</p>
                <p><strong>Centro:</strong> {{ $course->trainingCenter->name ?? 'Sin centro' }}</p>

                @auth
                    @if (auth()->user()->isAdmin())
                        <a href="{{ route('course.edit', $course->id) }}" class="btn btn-warning">Editar</a>
                    @endif
                @endauth

                <a href="{{ route('course.index') }}" class="btn btn-secondary">
                    Volver
                </a>

            </div>

        </div>

    </div>
@endsection
