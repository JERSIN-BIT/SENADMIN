@extends('layouts.app')

@section('content')
    <section class="home-hero" aria-label="Información destacada">
        <div id="inicio" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#inicio" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Diapositiva 1"></button>
                <button type="button" data-bs-target="#inicio" data-bs-slide-to="1" aria-label="Diapositiva 2"></button>
                <button type="button" data-bs-target="#inicio" data-bs-slide-to="2" aria-label="Diapositiva 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active hero-slide hero-slide-one">
                    <div class="hero-overlay"></div>
                    <div class="container hero-content">
                        <span class="hero-kicker">SENADMIN</span>
                        <h1>Información organizada para una formación que avanza</h1>
                        <p>Consulta y administra los recursos académicos del centro de formación en un solo lugar.</p>
                        <a class="btn btn-success" href="{{ route('apprentice.index') }}">Ir a administración</a>
                    </div>
                </div>
                <div class="carousel-item hero-slide hero-slide-two">
                    <div class="hero-overlay"></div>
                    <div class="container hero-content">
                        <span class="hero-kicker">FORMACIÓN</span>
                        <h1>Una comunidad que aprende, crea y transforma</h1>
                        <p>Conoce los cursos, instructores y ambientes disponibles para los aprendices.</p>
                        <a class="btn btn-success" href="{{ route('course.index') }}">Ver cursos</a>
                    </div>
                </div>
                <div class="carousel-item hero-slide hero-slide-three">
                    <div class="hero-overlay"></div>
                    <div class="container hero-content">
                        <span class="hero-kicker">RECURSOS</span>
                        <h1>Espacios y equipos para impulsar cada proyecto</h1>
                        <p>Gestiona las áreas y computadores que hacen parte de la experiencia formativa.</p>
                        <a class="btn btn-success" href="{{ route('computer.index') }}">Ver recursos</a>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#inicio" data-bs-slide="prev"><span
                    class="carousel-control-prev-icon" aria-hidden="true"></span><span
                    class="visually-hidden">Anterior</span></button>
            <button class="carousel-control-next" type="button" data-bs-target="#inicio" data-bs-slide="next"><span
                    class="carousel-control-next-icon" aria-hidden="true"></span><span
                    class="visually-hidden">Siguiente</span></button>
        </div>
    </section>

    <section id="quienes-somos" class="home-section">
        <div class="container">
            <div class="section-heading">
                <span>CONOCE SENADMIN</span>
                <h2>Quiénes somos</h2>
                <p>Una herramienta de apoyo para centralizar la información administrativa del SENA y facilitar la gestión
                    del proceso formativo.</p>
            </div>
        </div>
    </section>

    <section class="home-section news-section">
        <div class="container">
            <div class="section-heading section-heading-row">
                <div><span>ACTUALIDAD</span>
                    <h2>Noticias y eventos</h2>
                </div>
                <a href="#contacto" class="text-link">Más información</a>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <article class="news-card">
                        <div class="news-date">FORMACIÓN</div>
                        <h3>Consulta la oferta de cursos disponible</h3>
                        <p>Revisa la información de los programas y su organización desde el módulo administrativo.</p><a
                            href="{{ route('course.index') }}">Ver cursos →</a>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="news-card">
                        <div class="news-date">COMUNIDAD</div>
                        <h3>Gestión de aprendices e instructores</h3>
                        <p>Mantén los datos de la comunidad académica actualizados y disponibles.</p><a
                            href="{{ route('apprentice.index') }}">Ver aprendices →</a>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="news-card">
                        <div class="news-date">RECURSOS</div>
                        <h3>Ambientes preparados para aprender</h3>
                        <p>Organiza las áreas y computadores asignados al centro de formación.</p><a
                            href="{{ route('area.index') }}">Ver áreas →</a>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section id="contacto" class="contact-strip">
        <div class="container">
            <div><span>¿NECESITAS AYUDA?</span>
                <h2>Contáctanos</h2>
            </div>
            <p>Comunícate con la coordinación de tu centro de formación para recibir orientación.</p>
        </div>
    </section>

    <section id="inicio-sesion" class="visually-hidden" aria-label="Inicio de sesión"></section>
@endsection
