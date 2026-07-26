@extends('layouts.app')

@section('content')

<h1>Formulario Aprendiz</h1>

<form action="{{ route('apprentice.store') }}" method="POST">

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
        <label>Celular</label>
        <input type="text" name="cell_number" class="form-control">
    </div>

    <div class="mb-3">
        <label>Curso</label>

        <select name="course_id" class="form-control">

            @foreach($courses as $course)

                <option value="{{ $course->id }}">
                    {{ $course->course_number }}
                </option>

            @endforeach

        </select>

    </div>

    <div class="mb-3">
        <label>Computador</label>

        <select name="computer_id" class="form-control">

            @foreach($computers as $computer)

                <option value="{{ $computer->id }}">
                    {{ $computer->number }} - {{ $computer->brand }}
                </option>

            @endforeach

        </select>

    </div>

    <button class="btn btn-success">
        Enviar Formulario
    </button>

</form>

@endsection