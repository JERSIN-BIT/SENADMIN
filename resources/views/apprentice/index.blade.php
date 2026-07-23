@extends('layouts.app')

@section('content')

<h1>Lista de Aprendices</h1>

<table class="table table-striped table-bordered">
    <thead class="table-success">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
    </thead>

    <tbody>
        @foreach($apprentices as $apprentice)
            <tr>
                <td>{{ $apprentice->id }}</td>
                <td>{{ $apprentice->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection