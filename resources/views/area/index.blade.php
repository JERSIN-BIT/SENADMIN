@extends('layouts.app')

@section('content')

<h1>Lista de Áreas</h1>

<table class="table table-striped table-bordered">
    <thead class="table-success">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
    </thead>

    <tbody>
        @foreach($areas as $area)
            <tr>
                <td>{{ $area->id }}</td>
                <td>{{ $area->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection