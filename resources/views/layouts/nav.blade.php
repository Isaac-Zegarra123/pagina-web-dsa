<div class="video">
    <div class="text-video">
        <video autoplay muted loop class="video-header">
            <source src="{{ asset('images/videouatf.mp4') }}" type="video/mp4">
        </video>
        <div class="title-container">
            
            <h1 class="title">DIRECCIÓN DE SERVICIOS ACADÉMICOS</h1>
            
            <div class="relative flex items-top justify-center ">
                <img src="{{ asset('images/logo321.png') }}" alt="Logo UATF" class="logo" >
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">user</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" rel="noopener noreferrer" target="_blank">Inicio</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline" rel="noopener noreferrer" target="_blank">Registrar</a>
                        @endif
                    @endauth
                    </div>
                @endif
            </div>
        </div>
        <nav class="navbar navbar-dark bg-transparent">
            <div class="container-fluid">
                <div class="nav nav-fill w-100">
                    <a class="nav-link text-white" aria-current="page" href="#inicio"><i class="fas fa-home"></i> INICIO</a>
                    <a class="nav-link text-white" href="#convocatoria"><i class="fas fa-bullhorn"></i> CONVOCATORIAS</a>
                    <a class="nav-link text-white" href="#regramentos"><i class="fas fa-book"></i> REGLAMENTOS</a>
                    <a class="nav-link text-white" href="#contacto"><i class="fas fa-envelope"></i> CONTACTO</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bars"></i> MENÚ</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('document') }}" rel="noopener noreferrer" target="_blank"><i class="fas fa-file-alt"></i>DOCUMENTOS</a></li>
                            <li><a class="dropdown-item" href="{{ route('statistics') }}" rel="noopener noreferrer" target="_blank"><i class="fas fa-chart-line"></i> ESTADÍSTICA E INDICADORES</a></li>
                            <li><a class="dropdown-item" href="{{ route('academic') }}" rel="noopener noreferrer" target="_blank"><i class="fas fa-graduation-cap"></i> INFORMACIÓN ACADÉMICA</a></li>
                            <li><a class="dropdown-item" href="{{ route('graduantes') }}" rel="noopener noreferrer" target="_blank"><i class="fas fa-user-graduate"></i> TITULADOS</a></li>
                            <li><a class="dropdown-item" href="{{ route('calendar') }}" rel="noopener noreferrer" target="_blank"><i class="fas fa-calendar-alt"></i> CALENDARIO ACADÉMICO</a></li>
                        </ul>
                    </li>
                </div>
            </div>
        </nav>
        <div id="wave" style="height: 150px;">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,00.98 C200.90,200.52 200.49,-100.63 500.00,40.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg>
        </div>
    </div>
</div>