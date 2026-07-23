@extends('layouts.app')

@section('content')

<h1>Lista de Cursos</h1>

<table class="table table-striped table-bordered">
    <thead class="table-success">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
    </thead>

    <tbody>
        @foreach($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection