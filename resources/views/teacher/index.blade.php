@extends('layouts.app')

@section('content')

<h1>Lista de Profesores</h1>

<table class="table table-striped table-bordered">
    <thead class="table-success">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Área</th>
            <th>Centro de Formación</th>
        </tr>
    </thead>

    <tbody>
        @foreach($teachers as $teacher)
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->area->name }}</td>
                <td>{{ $teacher->trainingCenter->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection