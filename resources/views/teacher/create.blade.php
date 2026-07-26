@extends('layouts.app')

@section('content')

<h1>Formulario Instructor</h1>

<form action="{{ route('teacher.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label>Nombre</label>

        <input type="text" name="name" class="form-control">

    </div>

    <div class="mb-3">
        <label>Correo</label>

        <input type="email" name="email" class="form-control">

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