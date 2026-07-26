@extends('layouts.app')

@section('content')

<h1>Formulario Curso</h1>

<form action="{{ route('course.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label>Número del Curso</label>

        <input type="text" name="course_number" class="form-control">

    </div>

    <div class="mb-3">
        <label>Jornada</label>

        <input type="text" name="day" class="form-control">

    </div>

    <div class="mb-3">

        <label>Área</label>

        <select name="area_id" class="form-control">

            @foreach($areas as $area)

                <option value="{{ $area->id }}">
                    {{ $area->name }}
                </option>

            @endforeach

        </select>

    </div>

    <div class="mb-3">

        <label>Centro de Formación</label>

        <select name="training_center_id" class="form-control">

            @foreach($trainingCenters as $trainingCenter)

                <option value="{{ $trainingCenter->id }}">
                    {{ $trainingCenter->name }}
                </option>

            @endforeach

        </select>

    </div>

    <button class="btn btn-success">
        Enviar Formulario
    </button>

</form>

@endsection