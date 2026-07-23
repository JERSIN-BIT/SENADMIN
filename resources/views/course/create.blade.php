@extends('layouts.app')

@section('content')

<h1>Formulario Curso</h1>

<form action="{{ route('course.store') }}" method="POST">

    @csrf

    <!-- Campos del curso -->

    <button type="submit" class="btn btn-success">
        Enviar Formulario
    </button>

</form>

@endsection