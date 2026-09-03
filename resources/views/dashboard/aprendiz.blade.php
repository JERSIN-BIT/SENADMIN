@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <div class="mb-4">
            <h1>Panel de Aprendiz</h1>

            <p class="text-muted">
                Bienvenido, {{ auth()->user()->name }}
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h4>Mi perfil</h4>
                        <p>Consulta tus datos personales.</p>

                        <button class="btn btn-success">
                            Ver perfil
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h4>Mi programa</h4>
                        <p>Consulta la información de tu programa.</p>

                        <button class="btn btn-success">
                            Ver programa
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h4>Mi formación</h4>
                        <p>Consulta horarios, actividades y asistencia.</p>

                        <button class="btn btn-success">
                            Ver formación
                        </button>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
