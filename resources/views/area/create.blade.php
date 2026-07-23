@extends('layouts.app')

@section('content')

<h1>Formulario Area</h1>

<form action="{{ route('area.store') }}" method="POST">

    @csrf

    <label>
        Nombre Area:
        <br>
        <input type="text" name="name" class="form-control">
    </label>

    <br><br>

    <button type="submit" class="btn btn-success">
        Enviar Formulario
    </button>

</form>

@endsection