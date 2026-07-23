@extends('layouts.app')

@section('content')

<h1>Lista de Centros de Formación</h1>

<table class="table table-striped table-bordered">
    <thead class="table-success">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
    </thead>

    <tbody>
        @foreach($trainingCenters as $trainingCenter)
            <tr>
                <td>{{ $trainingCenter->id }}</td>
                <td>{{ $trainingCenter->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection