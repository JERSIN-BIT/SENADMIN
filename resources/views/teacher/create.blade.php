@extends('layouts.app')

@section('content')

<h1>Formulario Profesor</h1>

<form action="{{ route('teacher.store') }}" method="POST">

    @csrf

    <!-- Campos del profesor -->

    <button type="submit" class="btn btn-success">
        Enviar Formulario
    </button>

</form>

@endsection