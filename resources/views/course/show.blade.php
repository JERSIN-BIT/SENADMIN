@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>DETALLE DEL CURSO</h1>

        <div class="card">

            <div class="card-body">

                <p><strong>ID:</strong> {{ $course->id }}</p>
                <p><strong>Número:</strong> {{ $course->course_number }}</p>
                <p><strong>Jornada:</strong> {{ $course->day }}</p>
                <p><strong>Área:</strong> {{ $course->area_id }}</p>
                <p><strong>Centro:</strong> {{ $course->training_center_id }}</p>

                <a href="{{ route('course.edit', $course->id) }}" class="btn btn-warning">
                    Editar
                </a>

                <a href="{{ route('course.index') }}" class="btn btn-secondary">
                    Volver
                </a>

            </div>

        </div>

    </div>
@endsection
