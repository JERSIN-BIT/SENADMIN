@extends('layouts.app')

@section('content')

<h1>Formulario Área</h1>

<form action="{{ route('area.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label>Nombre del Área</label>

        <input type="text" name="name" class="form-control">

    </div>

    <button class="btn btn-success">
        Enviar Formulario
    </button>

</form>

@endsection