@extends('layouts.app')

@section('content')
    <section class="home-hero">
        <div id="inicio" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="{{ asset('images/comunidad-sena.png') }}" class="d-block w-100" alt="Comunidad SENA">

                    <div class="carousel-caption">
                        <h1>Bienvenidos a SENADMIN</h1>
                        <p>Administra la información del centro de formación de una manera fácil y organizada.</p>
                        <a href="{{ route('apprentice.index') }}" class="btn btn-success">
                            Ir a administración
                        </a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('images/formacion-sena.png') }}" class="d-block w-100" alt="Formación SENA">

                    <div class="carousel-caption">
                        <h1>Formación</h1>
                        <p>Consulta los cursos disponibles y la información de los aprendices.</p>
                        <a href="{{ route('course.index') }}" class="btn btn-success">
                            Ver cursos
                        </a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('images/recursos-sena.png') }}" class="d-block w-100" alt="Recursos SENA">

                    <div class="carousel-caption">
                        <h1>Recursos</h1>
                        <p>Consulta las áreas y computadores disponibles en el centro de formación.</p>
                        <a href="{{ route('computer.index') }}" class="btn btn-success">
                            Ver recursos
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <section id="quienes-somos" class="home-section">
        <div class="container">
            <div class="section-heading">
                <span>CONOCE SENADMIN</span>
                <h2>Quiénes somos</h2>
                <p>
                    Una herramienta de apoyo para centralizar la información
                    administrativa del SENA y facilitar la gestión del proceso formativo.
                </p>
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

                        <h3>
                            Consulta la oferta de cursos disponible
                        </h3>

                        <p>
                            Revisa la información de los programas y su organización
                            desde el módulo administrativo.
                        </p>

                        <a href="{{ route('course.index') }}">
                            Ver cursos →
                        </a>
                    </article>
                </div>


                <div class="col-md-4">
                    <article class="news-card">
                        <div class="news-date">COMUNIDAD</div>

                        <h3>
                            Gestión de aprendices e instructores
                        </h3>

                        <p>
                            Mantén los datos de la comunidad académica actualizados
                            y disponibles.
                        </p>

                        <a href="{{ route('apprentice.index') }}">
                            Ver aprendices →
                        </a>
                    </article>
                </div>


                <div class="col-md-4">
                    <article class="news-card">
                        <div class="news-date">RECURSOS</div>

                        <h3>
                            Ambientes preparados para aprender
                        </h3>

                        <p>
                            Organiza las áreas y computadores asignados
                            al centro de formación.
                        </p>

                        <a href="{{ route('area.index') }}">
                            Ver áreas →
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
                para recibir orientación.
            </p>

        </div>
    </section>


    <section id="inicio-sesion" class="visually-hidden" aria-label="Inicio de sesión">
    </section>
@endsection
