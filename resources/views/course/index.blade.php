@extends('layouts.app')

@section('content')

<h1>Lista de Cursos</h1>

<table class="table table-striped table-bordered">
    <thead class="table-success">
        <tr>
            <th>ID</th>
            <th>Número del Curso</th>
            <th>Jornada</th>
            <th>Área</th>
            <th>Centro de Formación</th>
        </tr>
    </thead>

    <tbody>
        @foreach($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->course_number }}</td>
                <td>{{ $course->day }}</td>
                <td>{{ $course->area->name }}</td>
                <td>{{ $course->trainingCenter->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection