@extends('layouts.app')

@section('content')
    <div class="container dashboard-shell">
        <div class="dashboard-intro">
            <div>
                <span class="eyebrow">Portal del aspirante</span>
                <h1>Encuentra tu próxima formación</h1>
                <p>Hola, {{ auth()->user()->name }}. Explora la oferta disponible en nuestros centros.</p>
            </div>
            <a href="{{ route('course.index') }}" class="btn btn-success">Ver toda la oferta</a>
        </div>

        <section class="dashboard-section">
            <div class="section-heading-row">
                <div><span class="eyebrow">Oferta vigente</span><h2>Formaciones disponibles</h2></div>
                <span class="course-count">{{ $courses->count() }} programas</span>
            </div>
            <div class="course-grid">
                @forelse ($courses as $course)
                    <article class="course-card">
                        <span class="course-tag">Programa SENA</span>
                        <h3>{{ $course->course_number }}</h3>
                        <p><strong>Jornada:</strong> {{ $course->day }}</p>
                        <p>{{ $course->area->name ?? 'Área por definir' }} · {{ $course->trainingCenter->name ?? 'Centro por definir' }}</p>
                        <a href="{{ route('course.show', $course->id) }}" class="text-link">Consultar formación →</a>
                    </article>
                @empty
                    <div class="empty-state">Aún no hay formaciones publicadas. Vuelve pronto para consultar la oferta.</div>
                @endforelse
            </div>
        </section>
    </div>
@endsection
