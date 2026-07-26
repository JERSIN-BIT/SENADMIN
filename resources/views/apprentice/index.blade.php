@extends('layouts.app')

@section('content')

<h1>Lista de Aprendices</h1>

<table class="table table-striped table-bordered">
    <thead class="table-success">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Celular</th>
            <th>Curso</th>
            <th>Computador</th>
        </tr>
    </thead>

    <tbody>
        @foreach($apprentices as $apprentice)
            <tr>
                <td>{{ $apprentice->id }}</td>
                <td>{{ $apprentice->name }}</td>
                <td>{{ $apprentice->email }}</td>
                <td>{{ $apprentice->cell_number }}</td>
                <td>{{ $apprentice->course->course_number }}</td>
                <td>{{ $apprentice->computer->number }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection