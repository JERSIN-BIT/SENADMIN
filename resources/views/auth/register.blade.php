@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow">
                    <div class="card-body p-4">

                        <span class="eyebrow">Comunidad SENA</span>
                        <h2 class="text-center mb-2">Crea tu cuenta</h2>
                        <p class="text-center text-muted mb-4">Elige el perfil que usarás en SENADMIN.</p>

                        <form action="{{ route('register') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Nombre</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Correo electrónico</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Contraseña</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Confirmar contraseña</label>
                                <input type="password" name="password_confirmation" class="form-control" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label" for="role">Tipo de usuario</label>
                                <select id="role" name="role" class="form-select" required>
                                    <option value="aspirante" {{ old('role', 'aspirante') === 'aspirante' ? 'selected' : '' }}>Aspirante</option>
                                    <option value="aprendiz" {{ old('role') === 'aprendiz' ? 'selected' : '' }}>Aprendiz</option>
                                    <option value="admin" {{ old('role') === 'admin' ? 'selected' : '' }}>Administrador</option>
                                </select>
                                <div class="form-text">Podrás consultar las formaciones desde tu primer ingreso.</div>
                            </div>

                            <button type="submit" class="btn btn-success w-100">
                                Registrarme
                            </button>
                        </form>

                        @if ($errors->any())
                            <div class="alert alert-danger mt-3 mb-0">
                                <ul class="mb-0 ps-3">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="text-center mt-3">
                            <a href="{{ route('login') }}">Ya tengo una cuenta</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
