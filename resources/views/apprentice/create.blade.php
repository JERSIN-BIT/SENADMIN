@extends('layouts.app')

@section('content')

<h1>Formulario Aprendiz</h1>

<form action="{{ route('apprentice.store') }}" method="POST">

    @csrf

    <!-- Aquí van los campos del aprendiz -->

    <button type="submit" class="btn btn-success">
        Enviar Formulario
    </button>

</form>

@endsection