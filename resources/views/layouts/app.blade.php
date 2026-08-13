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

            <a class="navbar-brand d-flex align-items-center" href="{{ route('apprentice.index') }}">

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
                        <a class="nav-link" href="{{ route('apprentice.index') }}">
                            Aprendices
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('teacher.index') }}">
                            Instructores
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('course.index') }}">
                            Cursos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('area.index') }}">
                            Áreas
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('computer.index') }}">
                            Computadores
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('trainingcenter.index') }}">
                            Centros
                        </a>
                    </li>

                </ul>

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
