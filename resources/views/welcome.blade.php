<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('Img/logo.jpg') }}" />

    <!-- Compiled and minified CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('CSS/normalize.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="{{ asset('CSS/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">

    <title>Centro Villa Fenix</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('Img/logo.jpg') }}" alt="Logo Centro Villa Fenix" width="90px" height="90px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn bg-lime text-white @if(Route::current()->getName() == 'home') btn-menu @endif mx-3 my-3" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn bg-lime text-white @if(Route::current()->getName() == 'nosotros') btn-menu @endif mx-3 my-3" href="{{ route('nosotros') }}">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn bg-lime text-white @if(Route::current()->getName() == 'tratamiento') btn-menu @endif  mx-3 my-3" href="{{ route('tratamiento') }}">Tratamiento</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="position-relative" id="slide-carrusel">
        <div class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item bg-dark active">
                    <div class="slider-img slider-1 opacity-70"></div>
{{--                    <img class="bd-placeholder-img bd-placeholder-img-lg d-block opacity-70" height="400" src="{{ asset('Img/slider.jpg') }}" alt="">--}}
{{--                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">First slide</text></svg>--}}
                </div>
{{--                <div class="carousel-item">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">Threrd slide</text></svg>
                </div>--}}
            </div>
        </div>

        <div class="carousel-wrap-title position-absolute">
            <strong>Clínica de Rehabilitación</strong>
            <h1>Centro de Villa Fenix A.C.</h1>
        </div>

        <div class="carousel-wrap-services position-absolute text-white text-center">
            <span class="mx-3 fw-bold">Alcoholismo</span>
            <b class="mx-3 fw-bold">&#8226;</b>
            <span class="mx-3 fw-bold">Anorexia</span>
            <b class="mx-3 fw-bold">&#8226;</b>
            <span class="mx-3 fw-bold">Drepesión</span>
            <b class="mx-3 fw-bold">&#8226;</b>
            <span class="mx-3 fw-bold">Bulimia</span>
            <b class="mx-3 fw-bold">&#8226;</b>
            <span class="mx-3 fw-bold">Ludopatia</span>
            <b class="mx-3 fw-bold">&#8226;</b>
            <span class="mx-3 fw-bold">Transtornos mentales / emocionales</span>
        </div>

    </div>
</header>

<section>
    @yield('content')
</section>

<footer>
    <div class="container">
        <div class="row py-3">
            <div class="col-sm-12 text-center"><img src="{{ asset('Img/logo.jpg') }}" width="100px" height="100px" alt="Logo Villa Fenix"></div>
            <div class="col-sm-12">
                <div class="text-center mt-3">
                    <a class="text-white mx-2" href="{{ route('home') }}">&#8226; Home</a>
                    <a class="text-white mx-2" href="{{ route('nosotros') }}">&#8226; Nosotros</a>
                    <a class="text-white mx-2" href="{{ route('tratamiento') }}">&#8226; Tratamiento</a>
                    <a class="text-white mx-2" href="{{ route('atendemos') }}">&#8226; ¿A quién atendemos?</a>
                    <a class="text-white mx-2" href="{{ route('representantes') }}">&#8226; Representantes</a>
                    <a class="text-white mx-2" href="{{ route('instalaciones') }}">&#8226; Instalaciones</a>
                    <a class="text-white mx-2" href="{{ route('contacto') }}">&#8226; Contacto</a>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center text-white">
            <small class="text-center">© 2021 Copyright Centro Villa Fenix</small>
        </div>
    </div>
</footer>

<div class="fixed-bottom mb-5 px-3 icon-wp">
    <a href="https://api.whatsapp.com/send?phone=34695685920&text=Hola,%20mi%20nombre%20es%20" target="_blank"><img src="{{ asset('Img/icon-wp.svg') }}" width="100px" alt=""></a>
</div>

<!-- Compiled and minified JavaScript -->
<script src="{{ asset('JS/bootstrap.min.js') }}"></script>
@yield('script')

</body>
</html>
