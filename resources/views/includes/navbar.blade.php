<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="{{ route('apprentice.index') }}">
            SENADMIN
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('apprentice.index') }}">
                        Aprendices
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
                    <a class="nav-link" href="{{ route('course.index') }}">
                        Cursos
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('teacher.index') }}">
                        Instructores
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
