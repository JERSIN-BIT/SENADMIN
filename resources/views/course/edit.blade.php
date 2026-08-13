@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>EDITAR CURSO</h1>

        <form action="{{ route('course.update', $course->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Número del curso</label>

                <input type="text" name="course_number" class="form-control" value="{{ $course->course_number }}" required>
            </div>

            <div class="mb-3">
                <label>Jornada</label>

                <input type="text" name="day" class="form-control" value="{{ $course->day }}" required>
            </div>

            <div class="mb-3">
                <label>Área</label>

                <select name="area_id" class="form-select">

                    @foreach ($areas as $area)
                        <option value="{{ $area->id }}" {{ $course->area_id == $area->id ? 'selected' : '' }}>

                            {{ $area->name }}

                        </option>
                    @endforeach

                </select>
            </div>

            <div class="mb-3">
                <label>Centro de formación</label>

                <select name="training_center_id" class="form-select">

                    @foreach ($training_centers as $center)
                        <option value="{{ $center->id }}"
                            {{ $course->training_center_id == $center->id ? 'selected' : '' }}>

                            {{ $center->name }}

                        </option>
                    @endforeach

                </select>
            </div>

            <button class="btn btn-success">
                Actualizar
            </button>

            <a href="{{ route('course.index') }}" class="btn btn-secondary">
                Cancelar
            </a>

        </form>

    </div>
@endsection
