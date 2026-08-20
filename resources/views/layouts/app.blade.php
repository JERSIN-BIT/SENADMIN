<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SENADMIN</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/sena.css') }}">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-sena">

        <div class="container">

            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">

                <img src="{{ asset('images/sena.png') }}" alt="SENA" class="sena-logo">

                <div>
                    <div class="brand-title">SENADMIN</div>
                    <div class="brand-subtitle">Sistema Administrativo SENA</div>
                </div>

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="menu">

                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#quienes-somos">
                            Quiénes somos
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Administración
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('apprentice.index') }}">Aprendices</a></li>
                            <li><a class="dropdown-item" href="{{ route('teacher.index') }}">Instructores</a></li>
                            <li><a class="dropdown-item" href="{{ route('course.index') }}">Cursos</a></li>
                            <li><a class="dropdown-item" href="{{ route('area.index') }}">Áreas</a></li>
                            <li><a class="dropdown-item" href="{{ route('computer.index') }}">Computadores</a></li>
                            <li><a class="dropdown-item" href="{{ route('trainingcenter.index') }}">Centros</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#contacto">
                            Contáctanos
                        </a>
                    </li>
                </ul>

                <form class="navbar-search d-flex" role="search" action="{{ route('home') }}" method="GET">
                    <label class="visually-hidden" for="buscador">Buscar</label>
                    <input id="buscador" class="form-control" type="search" name="q" placeholder="Buscar">
                    <button class="btn btn-search" type="submit" aria-label="Buscar">⌕</button>
                </form>

                <a class="btn btn-login" href="#inicio-sesion">Iniciar sesión</a>

            </div>

        </div>

    </nav>


    <main>

        @yield('content')

    </main>


    <footer class="footer-sena">

        <div class="container">

            <div class="footer-content">

                <div class="footer-logo">

                    <img src="{{ asset('images/sena.png') }}" alt="SENA">

                </div>

                <div>

                    <h5>SENADMIN</h5>

                    <p>
                        Sistema de administración de información
                        del Servicio Nacional de Aprendizaje.
                    </p>

                </div>

            </div>

            <div class="footer-line"></div>

            <div class="footer-bottom">

                <span>
                    © {{ date('Y') }} SENADMIN
                </span>

                <span>
                    Servicio Nacional de Aprendizaje - SENA
                </span>

            </div>

        </div>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
