@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>DETALLE DEL APRENDIZ</h1>

        <div class="card">

            <div class="card-body">

                <p><strong>ID:</strong> {{ $apprentice->id }}</p>

                <p><strong>Nombre:</strong> {{ $apprentice->name }}</p>

                <p><strong>Correo:</strong> {{ $apprentice->email }}</p>

                <p><strong>Celular:</strong> {{ $apprentice->cell_number }}</p>

                <p><strong>Curso:</strong> {{ $apprentice->course_id }}</p>

                <p><strong>Computador:</strong> {{ $apprentice->computer_id }}</p>

                <a href="{{ route('apprentice.edit', $apprentice->id) }}" class="btn btn-warning">
                    Editar
                </a>

                <a href="{{ route('apprentice.index') }}" class="btn btn-secondary">
                    Volver
                </a>

            </div>

        </div>

    </div>
@endsection
