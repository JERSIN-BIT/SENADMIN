@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <div class="dashboard-intro">
            <div>
                <span class="eyebrow">Centro de control</span>
                <h1>Administración SENADMIN</h1>
                <p>Bienvenido, {{ auth()->user()->name }}. Gestiona la operación del centro de formación.</p>
            </div>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h4>Usuarios</h4>
                        <p>Administrar los usuarios del sistema.</p>
                        <a href="{{ route('apprentice.index') }}" class="btn btn-success">Administrar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h4>Aprendices</h4>
                        <p>Gestionar los aprendices del SENA.</p>
                        <a href="{{ route('apprentice.index') }}" class="btn btn-success">Ver aprendices</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h4>Programas</h4>
                        <p>Gestionar los programas de formación.</p>
                        <a href="{{ route('course.index') }}" class="btn btn-success">Ver programas</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
