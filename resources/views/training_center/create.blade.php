@extends('layouts.app')

@section('content')

<h1>Formulario Centro de Formación</h1>

<form action="{{ route('trainingcenter.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Nombre</label>

        <input type="text" name="name" class="form-control">

    </div>

    <div class="mb-3">
        <label>Ubicación</label>

        <input type="text" name="location" class="form-control">

    </div>

    <button class="btn btn-success">
        Enviar Formulario
    </button>

</form>

@endsection