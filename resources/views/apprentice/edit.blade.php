@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>EDITAR APRENDIZ</h1>

        <form action="{{ route('apprentice.update', $apprentice->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nombre</label>

                <input type="text" name="name" class="form-control" value="{{ $apprentice->name }}" required>
            </div>

            <div class="mb-3">
                <label>Correo</label>

                <input type="email" name="email" class="form-control" value="{{ $apprentice->email }}" required>
            </div>

            <div class="mb-3">
                <label>Número de celular</label>

                <input type="text" name="cell_number" class="form-control" value="{{ $apprentice->cell_number }}"
                    required>
            </div>

            <div class="mb-3">
                <label>Curso</label>

                <select name="course_id" class="form-select">

                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}" {{ $apprentice->course_id == $course->id ? 'selected' : '' }}>

                            {{ $course->course_number }}

                        </option>
                    @endforeach

                </select>
            </div>

            <div class="mb-3">
                <label>Computador</label>

                <select name="computer_id" class="form-select">

                    @foreach ($computers as $computer)
                        <option value="{{ $computer->id }}"
                            {{ $apprentice->computer_id == $computer->id ? 'selected' : '' }}>

                            {{ $computer->number }}

                        </option>
                    @endforeach

                </select>
            </div>

            <button class="btn btn-success">
                Actualizar
            </button>

            <a href="{{ route('apprentice.index') }}" class="btn btn-secondary">
                Cancelar
            </a>

        </form>

    </div>
@endsection
