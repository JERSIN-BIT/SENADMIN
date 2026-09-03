@extends('layouts.app')

@section('content')
    <div class="container dashboard-shell">
        <div class="dashboard-intro">
            <div>
                <span class="eyebrow">Portal del aprendiz</span>
                <h1>Continúa construyendo tu futuro</h1>
                <p>Hola, {{ auth()->user()->name }}. Consulta tu oferta de formación y mantente al día.</p>
            </div>
            <a href="{{ route('course.index') }}" class="btn btn-success">Consultar programas</a>
        </div>
        <section class="dashboard-section">
            <div class="section-heading-row">
                <div><span class="eyebrow">Programas</span><h2>Oferta de formación</h2></div>
                <span class="course-count">{{ $courses->count() }} disponibles</span>
            </div>
            <div class="course-grid">
                @forelse ($courses as $course)
                    <article class="course-card">
                        <span class="course-tag">Formación</span>
                        <h3>{{ $course->course_number }}</h3>
                        <p><strong>Jornada:</strong> {{ $course->day }}</p>
                        <p>{{ $course->area->name ?? 'Área por definir' }} · {{ $course->trainingCenter->name ?? 'Centro por definir' }}</p>
                        <a href="{{ route('course.show', $course->id) }}" class="text-link">Ver detalles →</a>
                    </article>
                @empty
                    <div class="empty-state">No hay formaciones disponibles en este momento.</div>
                @endforelse
            </div>
        </section>
    </div>
@endsection
