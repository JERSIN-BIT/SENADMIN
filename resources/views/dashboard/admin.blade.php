@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <div class="mb-4">
            <h1>Panel de Administrador</h1>

            <p class="text-muted">
                Bienvenido, {{ auth()->user()->name }}
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h4>Usuarios</h4>
                        <p>Administrar los usuarios del sistema.</p>
                        <button class="btn btn-success">
                            Administrar
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h4>Aprendices</h4>
                        <p>Gestionar los aprendices del SENA.</p>
                        <button class="btn btn-success">
                            Ver aprendices
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h4>Programas</h4>
                        <p>Gestionar los programas de formación.</p>
                        <button class="btn btn-success">
                            Ver programas
                        </button>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
