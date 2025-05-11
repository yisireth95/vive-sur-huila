<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vive Sur Huila - Plataforma de Promoción Turística</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="resources/css/estilo.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="#">Vive Sur Huila</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#inicio">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#servicios">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#negocios">Negocios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacto">Contacto</a>
                        </li>
                    </ul>
                    <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#loginModal">Iniciar Sesión</button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Modal de Login -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <p class="w-100 text-center">¿No tienes una cuenta? <a href="#" id="registerLink">Regístrate aquí</a></p>
                </div>
            </div>
        </div>
    </div>

    <main>
        <section id="inicio" class="hero">
            <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/imagen1.jpg" class="d-block w-100" alt="Paisaje del Sur del Huila">
                        <div class="carousel-caption">
                            <h1 class="display-4">Descubre el Sur del Huila</h1>
                            <p class="lead">Explora la magia de nuestra tierra y sus servicios turísticos</p>
                            <a href="#servicios" class="btn btn-primary btn-lg">Conoce más</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/imagen2.jpg" class="d-block w-100" alt="Cultura del Sur del Huila">
                        <div class="carousel-caption">
                            <h1 class="display-4">Vive Nuestra Cultura</h1>
                            <p class="lead">Sumérgete en las tradiciones y la hospitalidad huilense</p>
                            <a href="#servicios" class="btn btn-primary btn-lg">Descubre más</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/imagen3.jpg" class="d-block w-100" alt="Aventuras en el Sur del Huila">
                        <div class="carousel-caption">
                            <h1 class="display-4">Aventura Sin Límites</h1>
                            <p class="lead">Desafía tus límites en nuestros impresionantes paisajes</p>
                            <a href="#servicios" class="btn btn-primary btn-lg">Explora más</a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </section>

        <section id="servicios" class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Nuestros Servicios Turísticos</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <img src="img/servicios/hospedaje.jpg" class="d-block w-100" alt="Aventuras en el Sur del Huila" width="300" height="300">
                                <h3 class="card-title">Hospedaje</h3>
                                <p class="card-text">Descubre los mejores lugares para alojarte en el sur del Huila.</p>
                                <a href="#" class="btn btn-outline-primary">Ver más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <img src="img/servicios/gastronomia1.jpg" class="d-block w-100" alt="Aventuras en el Sur del Huila" width="300" height="300">
                                <h3 class="card-title">Gastronomía</h3>
                                <p class="card-text">Prueba los sabores auténticos de nuestra región.</p>
                                <a href="#" class="btn btn-outline-primary">Ver más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <img src="img/servicios/aventura1.jpg" class="d-block w-100" alt="Aventuras en el Sur del Huila" width="300" height="300">
                                <h3 class="card-title">Aventura</h3>
                                <p class="card-text">Vive experiencias emocionantes en nuestros paisajes naturales.</p>
                                <a href="#" class="btn btn-outline-primary">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="negocios" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5">Negocios Destacados</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="img/servicios/villamilena.jpg" class="card-img-top" alt="Negocio 1" style="width: 413px; height: 300px;">
                            <div class="card-body">
                                <h3 class="card-title">Centro Recreacional Villamilena</h3>
                                <p class="card-text">Breve descripción del negocio y sus servicios ofrecidos.</p>
                                <p class="card-text"><small class="text-muted">Ubicación: Pitalito Huila</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="img/servicios/mirador.jpg" class="card-img-top" alt="Negocio 2"style="width: 413px; height: 300px;">
                            <div class="card-body">
                                <h3 class="card-title">Finca recreacional Mirador del Mortiñal</h3>
                                <p class="card-text">Breve descripción del negocio y sus servicios ofrecidos.</p>
                                <p class="card-text"><small class="text-muted">Ubicación: Isnos Huila</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="img/servicios/laguna.jpg" class="card-img-top" alt="Negocio 3"style="width: 413px; height: 300px;">
                            <div class="card-body">
                                <h3 class="card-title">Sitio Turistico La laguna de Guitipan</h3>
                                <p class="card-text">Breve descripción del negocio y sus servicios ofrecidos.</p>
                                <p class="card-text"><small class="text-muted">Ubicación: Pitalito Huila</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contacto" class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">¿Quieres promocionar tu negocio?</h2>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form id="contact-form">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Nombre del negocio" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Correo electrónico" required>
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" placeholder="Teléfono" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="4" placeholder="Describe tu negocio y servicios" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Enviar solicitud</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('layouts.footer')

<script>
    document.addEventListener('DOMContentLoaded', function () {
    @if ($errors->any())
        var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
        loginModal.show();
    @endif
});

</script>


    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>
</html>