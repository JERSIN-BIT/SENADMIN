@extends('layouts.app')

@section('content')
    <section class="home-hero">
        <div id="inicio" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#inicio" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#inicio" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#inicio" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="{{ asset('images/comunidad-sena.png') }}" class="d-block w-100" alt="Comunidad SENA">

                    <div class="carousel-caption">
                        <h1>Bienvenidos a SENADMIN</h1>
                        <p>Administra la información del centro de formación de una manera fácil y organizada.</p>

                        <a href="#modulos" class="btn btn-success">
                            Explorar sistema
                        </a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('images/formacion-sena.png') }}" class="d-block w-100" alt="Formación SENA">

                    <div class="carousel-caption">
                        <h1>Gestión de formación</h1>
                        <p>Consulta y administra los cursos, aprendices e instructores del centro de formación.</p>

                        <a href="{{ route('course.index') }}" class="btn btn-success">
                            Ver cursos
                        </a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('images/recursos-sena.png') }}" class="d-block w-100" alt="Recursos SENA">

                    <div class="carousel-caption">
                        <h1>Gestión de recursos</h1>
                        <p>Organiza las áreas, computadores y centros de formación disponibles.</p>

                        <a href="{{ route('computer.index') }}" class="btn btn-success">
                            Ver recursos
                        </a>
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#inicio" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#inicio" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>

        </div>
    </section>

    <section id="quienes-somos" class="home-section about-section">

        <div class="container">

            <div class="about-content">

                <div class="section-heading">

                    <span>CONOCE SENADMIN</span>

                    <h2>Quiénes somos</h2>

                    <p>
                        SENADMIN es una herramienta de apoyo para centralizar
                        y organizar la información administrativa de un centro
                        de formación del SENA.
                    </p>

                    <p>
                        El sistema permite gestionar información relacionada
                        con aprendices, instructores, cursos, áreas,
                        computadores y centros de formación desde un solo lugar.
                    </p>

                    <a href="#modulos" class="btn btn-success">
                        Conocer el sistema
                    </a>

                </div>

                <div class="about-image">

                    <img src="{{ asset('images/formacion-sena.png') }}" alt="Formación SENA">

                </div>

            </div>

        </div>

    </section>

    <section id="modulos" class="home-section modules-section">

        <div class="container">

            <div class="section-heading text-center mx-auto">

                <span>GESTIÓN CENTRALIZADA</span>

                <h2>Todo el sistema en un solo lugar</h2>

                <p>
                    SENADMIN reúne diferentes procesos administrativos
                    para facilitar la organización y consulta de la información
                    del centro de formación.
                </p>

            </div>

            <div class="row g-4 mt-4">

                <div class="col-md-4">
                    <div class="module-card">

                        <div class="module-number">01</div>

                        <div class="module-content">

                            <h3>Gestión académica</h3>

                            <p>
                                Centraliza la información relacionada con
                                aprendices, instructores y cursos,
                                facilitando su consulta y administración.
                            </p>

                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="module-card">

                        <div class="module-number">02</div>

                        <div class="module-content">

                            <h3>Gestión de recursos</h3>

                            <p>
                                Permite organizar la información de las áreas
                                y computadores utilizados en los espacios
                                de formación.
                            </p>

                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="module-card">

                        <div class="module-number">03</div>

                        <div class="module-content">

                            <h3>Administración institucional</h3>

                            <p>
                                Facilita la organización de los centros de
                                formación y la información administrativa
                                desde una plataforma centralizada.
                            </p>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>

    <section class="home-section news-section">

        <div class="container">

            <div class="section-heading section-heading-row">

                <div>
                    <span>ACTUALIDAD</span>
                    <h2>Noticias y eventos</h2>
                </div>

                <a href="#contacto" class="text-link">
                    Más información
                </a>

            </div>

            <div class="row g-4">

                <div class="col-md-4">
                    <article class="news-card">

                        <div class="news-date">FORMACIÓN</div>

                        <h3>Consulta la oferta de cursos disponible</h3>

                        <p>
                            Revisa la información de los programas
                            y su organización desde el módulo administrativo.
                        </p>

                        <a href="{{ route('course.index') }}">
                            Ver cursos
                        </a>

                    </article>
                </div>

                <div class="col-md-4">
                    <article class="news-card">

                        <div class="news-date">COMUNIDAD</div>

                        <h3>Gestión de aprendices e instructores</h3>

                        <p>
                            Mantén los datos de la comunidad académica
                            actualizados y disponibles.
                        </p>

                        <a href="{{ route('apprentice.index') }}">
                            Ver aprendices
                        </a>

                    </article>
                </div>

                <div class="col-md-4">
                    <article class="news-card">

                        <div class="news-date">RECURSOS</div>

                        <h3>Ambientes preparados para aprender</h3>

                        <p>
                            Organiza las áreas y computadores asignados
                            al centro de formación.
                        </p>

                        <a href="{{ route('area.index') }}">
                            Ver áreas
                        </a>

                    </article>
                </div>

            </div>

        </div>

    </section>

    <section id="contacto" class="contact-strip">

        <div class="container">

            <div>
                <span>¿NECESITAS AYUDA?</span>
                <h2>Contáctanos</h2>
            </div>

            <p>
                Comunícate con la coordinación de tu centro de formación
                para recibir orientación sobre los procesos administrativos.
            </p>

        </div>

    </section>

    <section id="inicio-sesion" class="visually-hidden" aria-label="Inicio de sesión">
    </section>
@endsection
