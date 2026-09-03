@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <div class="mb-4">
            <h1>Panel de Aspirante</h1>

            <p class="text-muted">
                Bienvenido, {{ auth()->user()->name }}
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h4>Mi perfil</h4>
                        <p>Consulta y actualiza tus datos personales.</p>

                        <button class="btn btn-success">
                            Ver perfil
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h4>Programas disponibles</h4>
                        <p>Consulta los programas de formación disponibles.</p>

                        <button class="btn btn-success">
                            Ver programas
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h4>Mis solicitudes</h4>
                        <p>Consulta el estado de tus solicitudes.</p>

                        <button class="btn btn-success">
                            Ver solicitudes
                        </button>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
