@extends('layouts.app')

@section('content')

<h1>Formulario Centro de Formación</h1>

<form action="{{ route('trainingcenter.store') }}" method="POST">

    @csrf

    <!-- Campos del centro -->

    <button type="submit" class="btn btn-success">
        Enviar Formulario
    </button>

</form>

@endsection