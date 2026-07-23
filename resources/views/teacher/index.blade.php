@extends('layouts.app')

@section('content')

<h1>Lista de Profesores</h1>

<table class="table table-striped table-bordered">
    <thead class="table-success">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
    </thead>

    <tbody>
        @foreach($teachers as $teacher)
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection