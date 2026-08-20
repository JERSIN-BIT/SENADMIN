@extends('layouts.app')

@section('content')
@section('content')

    <div class="container apprentice-list">
        <div class="d-flex justify-content-between align-items-center mb-4">

            <h1>LISTAR APRENDICES</h1>

            <a href="{{ route('apprentice.create') }}" class="btn btn-success">
                + Nuevo aprendiz
            </a>

        </div>

        <table class="table table-striped table-bordered">

            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Número de celular</th>
                    <th>Id-Curso</th>
                    <th>Id-Computador</th>
                    <th>Detalle</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>

                @forelse($apprentices as $apprentice)
                    <tr>

                        <td>{{ $apprentice->id }}</td>
                        <td>{{ $apprentice->name }}</td>
                        <td>{{ $apprentice->email }}</td>
                        <td>{{ $apprentice->cell_number }}</td>
                        <td>{{ $apprentice->course_id }}</td>
                        <td>{{ $apprentice->computer_id }}</td>

                        <td>
                            <a href="{{ route('apprentice.show', $apprentice->id) }}" class="btn btn-info btn-sm text-white">
                                Mostrar
                            </a>
                        </td>

                        <td>
                            <a href="{{ route('apprentice.edit', $apprentice->id) }}" class="btn btn-warning btn-sm">
                                Editar
                            </a>
                        </td>

                        <td>
                            <form action="{{ route('apprentice.destroy', $apprentice->id) }}" method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Seguro que deseas eliminar este aprendiz?')">
                                    Eliminar
                                </button>

                            </form>
                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="9" class="text-center">
                            No hay aprendices registrados.
                        </td>
                    </tr>
                @endforelse

            </tbody>

        </table>

    </div>
@endsection
