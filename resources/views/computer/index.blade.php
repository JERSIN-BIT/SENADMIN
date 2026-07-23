@extends('layouts.app')

@section('content')

<h1>Lista de Computadores</h1>

<table class="table table-striped table-bordered">
    <thead class="table-success">
        <tr>
            <th>ID</th>
            <th>Número</th>
            <th>Marca</th>
        </tr>
    </thead>

    <tbody>
        @foreach($computers as $computer)
            <tr>
                <td>{{ $computer->id }}</td>
                <td>{{ $computer->number }}</td>
                <td>{{ $computer->brand }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection