@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow">
                    <div class="card-body p-4">

                        <span class="eyebrow">SENADMIN</span>
                        <h2 class="text-center mb-2">Bienvenido de nuevo</h2>
                        <p class="text-center text-muted mb-4">Ingresa para continuar tu formación.</p>

                        <form action="{{ route('login') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Correo electrónico</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Contraseña</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-success w-100">
                                Iniciar sesión
                            </button>
                        </form>

                        @if ($errors->any())
                            <div class="alert alert-danger mt-3 mb-0">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        <div class="text-center mt-3">
                            <a href="{{ route('register') }}">Crear una cuenta</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
