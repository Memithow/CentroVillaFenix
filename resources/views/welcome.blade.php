<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Compiled and minified CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('CSS/normalize.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">

    <title>Centro Villa Fenix</title>
</head>
<body>
<header>
    <div class="row social-media blue lighten-5">
        <div class="col s2 social">
            <a href="#" class=""><i class="fab fa-facebook-f"></i></a>
        </div>
        <div class="col s10 contact">
            <a href="mailto:info@primerpaso.org.mx" target="_blank"> <i class="fa fa-envelope"></i> info@villafenix.org.mx</a>
            <a href="tel:5513128553" target="_blank"> <i class="fa fa-phone"></i> 5513128553 </a>
            <a href="https://api.whatsapp.com/send?phone=5534358898&amp;text=Me podrían brindar información acerca de sus tratamientos de adicciones" target="_blank"> <i class="fab fa-whatsapp"></i> 5534358898 </a>
        </div>
    </div>

    <div class="navbar-fixed" id="header">
        <nav class="white lighten-1">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">
                    <img src="{{ asset('Img/logo.jpg') }}" alt="Centro Villa Fenix Logo" width="90px" height="90px">
                </a>

                <a href="#" class="sidenav-trigger hamburger" data-target="mobile-nav">
                    <i class="fas fa-bars grey-text"></i>
                </a>

                <a href="tel:5513128553" target="_blank"> <i class="fa fa-phone"></i> 5513128553 </a>

                <a href="https://api.whatsapp.com/send?phone=5534358898&amp;text=Me podrían brindar información acerca de sus tratamientos de adicciones" target="_blank"> <i class="fa fa-whatsapp"></i> 5534358898 </a>

                <ul class="right hide-on-med-and-down">
                    <li><a class="grey-text" href="/">Home</a></li>
                    <li><a class="grey-text" href="nosotros">Nosotros</a></li>
                    <li><a class="grey-text" href="instalaciones">Instalaciones</a></li>
                    <li><a class="grey-text" href="tratamiento">Tratamiento</a></li>
                    <li><a class="grey-text" href="contacto">Contacto</a></li>
                </ul>
            </div>
        </nav>
    </div>

        <ul class="sidenav" id="mobile-nav">
            <li><a href="/">Home</a></li>
            <li><a href="nosotros">Nosotros</a></li>
            <li><a href="instalaciones">Instalaciones</a></li>
            <li><a href="tratamiento">Tratamiento</a></li>
            <li><a href="contacto">Contacto</a></li>
        </ul>

    <section>
        <div class="carousel carousel-slider center">
            <div class="carousel-item red white-text" href="#one!">
                <h2 class="title-slider">Clínica de Rehabilitación<br>Centro Villa Fenix</h2>
            </div>
            <div class="carousel-item amber white-text" href="#two!">
                <h2 class="title-slider">Conoce nuestras instalaciones</h2>
                <a href="#" class="white-text">This is your second panel</a>
            </div>
            <div class="carousel-item green white-text" href="#two!">
                <h2 class="title-slider">Con nosotros puedes lograrlo en 1, 2, 4 o 17 semanas.</h2>
                <a href="#" class="white-text">This is your panel</a>
            </div>
        </div>
    </section>
</header>

<section>
    @yield('content')
</section>

<footer class="page-footer blue darken-1">
    <div class="container">
        <div class="row valign-wrapper">
            <div class="col l6 s12 valign-wrapper">
                <img src="{{ asset('Img/logo.jpg') }}" alt="logo" width="100px" height="100px">
            </div>
            <div class="col l4 offset-l2 s12 sitemap">
                <ul>
                    <li><a class="grey-text text-lighten-3" href="/">Home</a></li>
                    <li><a class="grey-text text-lighten-3" href="nosotros">Nosotros</a></li>
                    <li><a class="grey-text text-lighten-3" href="instalaciones">Instalaciones</a></li>
                    <li><a class="grey-text text-lighten-3" href="tratamiento">Tratamiento</a></li>
                    <li><a class="grey-text text-lighten-3" href="contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2021 Centro Villa Fenix
        </div>
    </div>

    <div id="top-of-site-pixel-anchor"></div>
</footer>
<!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
    $(document).ready(function (){
        $(".dropdown-trigger").dropdown();
        $('.sidenav').sidenav();

        $(document).ready(function() {
            $('textarea').characterCounter();
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        var carrusel_slider = document.querySelectorAll('.carousel-slider');
        var instances = M.Carousel.init(carrusel_slider, {
            duration: 200,
            fullWidth: true,
            indicators: true,
        });

        var carrusel_gallery = document.querySelectorAll('.carousel-galery');
        var instances = M.Carousel.init(carrusel_gallery, {
            duration: 1000,
            fullWidth: false,
            indicators: false,
            noWrap: false,
            dist: -50,
            shift: 50,
        });
    });

    ciclo();

    function ciclo() {
        setTimeout(()=> {
            var instance = M.Carousel.getInstance(document.querySelector('.carousel'));
            instance.next();
            ciclo();
        }, 10000);
    }


    // When the user scrolls down 50px from the top of the document, resize the header's font size
    window.onscroll = function() {
        if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
            document.getElementById("header").style.marginTop = "-30px";
        } else {
            document.getElementById("header").style.marginTop = "0px";
        }
    };

</script>
</body>
</html>
