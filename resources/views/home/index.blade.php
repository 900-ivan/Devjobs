<x-app-layout>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        .jumbotron {
            background-color: #007bff;
            color: white;
            padding: 100px 0;
        }
        .jumbotron h1 {
            font-size: 3.5rem;
        }
        .jumbotron p {
            font-size: 1.5rem;
        }
        .jumbotron2 {
            background-color: black;
            color: #007bff;
            padding: 100px 0;
        }
        .jumbotron2 h1 {
            font-size: 3.5rem;
        }
        .jumbotron2 p {
            font-size: 1.5rem;
        }
        .mission-vision {
            background-color: #f8f9fa;
            padding: 50px 0;
        }
        .mission-vision h2 {
            margin-bottom: 70px;
            color: #007bff;
        }
        .objectives {
            padding: 50px 0;
        }
        .objectives h2 {
            margin-bottom: 70px;
            color: #007bff;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Acerca de Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#mission">Misión y Visión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#objectives">Objetivos</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <div class="container">
            <h1 class="display-4">Acerca de DevJobs</h1>
            <p class="lead">Conoce más sobre nuestra empresa y nuestra misión de ayudar a conectar a los desarrolladores con oportunidades laborales.</p>
        </div>
    </div>
    <div class="jumbotron2 text-center">
        <div class="container">
            <h1 class="display-4">Nosotros</h1>
            <p class="lead">Somos DevJobs, una plataforma dedicada a facilitar la búsqueda de empleo para desarrolladores de software. Nuestro objetivo es conectar talento con oportunidades, haciendo que el proceso sea más eficiente y efectivo para ambas partes.</p>
        </div>
    </div>

    <div id="mission" class="mission-vision">
        <div class="container">
            <h2 class="text-center">Misión y Visión</h2>
            <div class="row">
                <div class="col-md-6">
                    <h3>Misión</h3>
                    <p>Nuestra misión es proporcionar una plataforma innovadora y efectiva que permita a los desarrolladores encontrar oportunidades laborales adecuadas para su perfil.</p>
                </div>
                <div class="col-md-6">
                    <h3>Visión</h3>
                    <p>Nuestra visión es convertirnos en el principal punto de encuentro entre empresas y desarrolladores, facilitando la creación de equipos de trabajo eficientes y exitosos.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="carrusel" class="carrusel-home">
        @livewire('carrusel-vacantes')
    </div>

    <div id="objectives" class="objectives">
        <div class="container">
            <h2 class="text-center">Objetivos</h2>
            <div class="row">
                <div class="col-md-4">
                    <h3>Innovación</h3>
                    <p>Impulsar constantemente la innovación en el ámbito de la búsqueda de empleo para desarrolladores.</p>
                </div>
                <div class="col-md-4">
                    <h3>Calidad</h3>
                    <p>Ofrecer servicios de alta calidad que cumplan con las expectativas tanto de desarrolladores como de empresas.</p>
                </div>
                <div class="col-md-4">
                    <h3>Transparencia</h3>
                    <p>Mantener siempre la transparencia en nuestras operaciones y relaciones con usuarios y clientes.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</x-app-layout>
