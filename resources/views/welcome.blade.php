<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('CSS/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.15.2-web/css/all.css') }}">
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
                    <li><a class="grey-text" href="#">Home</a></li>
                    <li><a class="grey-text" href="#">Nosotros</a></li>
                    <li><a class="grey-text" href="#">Instalaciones</a></li>
                    <li><a class="grey-text" href="#">Tratamiento</a></li>
                    <li><a class="grey-text" href="#">Contacto</a></li>
                </ul>
            </div>
        </nav>
    </div>

        <ul class="sidenav" id="mobile-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Nosotros</a></li>
            <li><a href="#">Instalaciones</a></li>
            <li><a href="#">Tratamiento</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>

    <section>
        <div class="carousel carousel-slider center">
            <div class="carousel-item red white-text" href="#one!">
                <h2 class="title-slider">Clínica de Rehabilitación Hacienda Santa Clara A.C.</h2>
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
    <div class="container">
        <div class="row">
            <div class="col s10 title">
                <h1>Tú no eres culpable por estar sufriendo, pero sí eres responsable de sanarte.</h1>
            </div>
        </div>
    </div>
    <div class="cta blue-grey lighten-5">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <span><a href="#">Conoce nuestras instalaciones</a></span><br><br>
                    <strong>Con nosotros puedes lograrlo en 1, 2, 4 o 17 semanas.</strong>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col s8">
                    <div class="col s12">
                        <p><span>¿EMPEZAMOS?</span></p>
                        <strong>Solo tienes que seguir estos tres sencillos pasos: </strong>
                        <ol class="ol-animate">
                            <li>Contáctanos</li>
                            <li>Pregúntanos</li>
                            <li>Platícanos</li>
                        </ol>
                        <p>Cuéntanos  tu caso para que nuestros expertos te orienten y puedas abordar el tema de la mejor manera. Si tu ser querido está de acuerdo puede ingresar a nuestras instalaciones a cualquier hora los 365 días del año.</p>
                    </div>
                </div>
                <form class="col s4 blue darken-1">
                    <div class="row form-contact">
                        <span class="white-text">Envianos un mensaje</span>
                        <div class="input-field col s12">
                            <input id="nombre" type="text" class="validate">
                            <label for="nombre">Nombre</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="telefono" type="text" class="validate">
                            <label for="telefono">Teléfono</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="mensaje" class="materialize-textarea" data-length="500"></textarea>
                            <label for="mensaje">Mensaje</label>
                        </div>
                        <div class="col s12">
                            <button class="waves-effect waves-light btn">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row middle-content z-depth-5">
            <div class="col s12 m6">
                <span>¿Quién puede ingresar?</span>
                <p>Nuestras instalaciones están optimizadas para recibir a una amplia variedad de personas. Puedes hablarle de nosotros a tu hijo o hija, a tu esposo o esposa, a tu padre o tu madre, a tus amigos y hasta a tus vecinos. Ten por seguro que aquí se sentirán protegidos.</p>
            </div>
            <div class="col s12 m6 img-ingresar">
            </div>
        </div>
        <div class="row middle-content z-depth-5">
            <div class="col s12 m6 img-querido">
            </div>
            <div class="col s12 m6">
                <span>¿Tu ser querido no quiere venir?</span>
                <p>¡No te preocupes! Nosotros te orientamos acerca de cómo proceder de forma positiva a través de un <b>sustento profesional de intervención en crisis</b>, porque todos merecemos un mejor estilo de vida.</p>
            </div>
        </div>
    </div>

    <div class="cta blue-grey lighten-5">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <strong>Tratamiento de trastornos emocionales y conductas autodestructivas.</strong>

                    <p>En la Clínica Hacienda Santa Clara A.C. Estamos comprometidos con nuestro trabajo y nos sentimos orgullosos de los resultados que ofrecemos.</p>

                    <p>Estamos seguros que las dependencias, así como cualquier trastorno emocional son consecuencia de una realidad poco satisfactoria y que existe el impulso de huir de esa realidad, así como de cualquier situación que los pudiera haber originado como eventos no gratos del pasado, duelos no resueltos, resentimientos, culpas, miedos, etc.</p>

                    <p>Por lo anterior es indispensable saber cuál es la causa de dicha adicción o trastorno para poder trabajarlo de raíz, a fin de lograr buenos resultados y que estos se vean traducidos  en una exitosa rehabilitación.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <span>Nuestros representantes:</span>

                <p>Estamos conformados por un equipo interdisciplinario de profesionistas en las áreas de psicología, medicina, terapia familiar, nutrición, acondicionamiento físico y meditación. Todos con la única finalidad de sacar adelante al paciente para que pueda integrarse exitosamente a su entorno familiar, laboral y social.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <span>¿Cómo lo logramos?</span>
                <p>Trabajamos en un ambiente de respeto y confidencialidad donde los principios de empatía, dignidad, calidez y hermandad son fundamentales para guiar  nuestro tratamiento terapéutico mixto.</p>
            </div>

            <div class="col s12">
                Nuestro tratamiento está dividido en los siguientes niveles:
                <ul>
                    <li><b>Etapa I</b> - Desintoxicación y valoración médica</li>
                    <li><b>Etapa II</b> - Valoración y atención Psicológica</li>
                    <li><b>Etapa III</b> - Terapias Alternativas</li>
                    <li><b>Etapa IV</b> - Atención Familiar</li>
                    <li><b>Etapa V</b> - Seguimiento</li>
                    <li><b>Etapa VI</b> – Reforzamiento</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <span>¿QUIÉNES SOMOS?</span>
                <p>Clínica de Rehabilitación Hacienda Santa Clara A.C., es un centro especializado que ayuda a diferentes personas a recuperar su calidad de vida.</p>

                <p>Nuestros terapeutas están dedicados a  guiar a los pacientes con tratamiento de dependencias orgánicas o psicológicas a través de tratos cálidos y hogareños, en un ambiente amoroso, lleno de paz, dignidad y mucho respeto.</p>

                <p>Para alcanzar los objetivos usamos el sustento profesional de intervención en crisis para sensibilizar a la familia y al paciente con la finalidad de acelerar y lograr el internamiento de forma voluntaria e inmediata.</p>

                <p>Durante el proceso de desintoxicación y estabilización ofrecemos seguimiento terapéutico para el paciente y familiares. Tenemos médicos expertos en neurología de las adicciones, psicólogos, terapeutas certificados, consejeros espirituales, nutriólogo, enfermera y terapeutas alternativos.</p>

                <p>Como podrás darte cuenta, estamos más que comprometidos no solo con el paciente, también con sus familiares y amigos, por lo que llevamos cada caso con completa confidencialidad. </p>

                <p>En Clínica de Rehabilitación Hacienda Santa Clara A.C.,
                    Estamos ubicados en el municipio de Ecatepec de Morelos, Estado de México. (INSERTAR DIRECCIÓN COMPLETA)</p>

                <p>Acércate y conoce los beneficios de nuestro tratamiento de adicciones. En Clínica de Rehabilitación Hacienda Santa Clara A.C. entendemos el dolor y frustración tuyos y de tu ser querido, pero recuerda: NO ESTÁN SOLOS. </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <h3>¡ALÉJATE DE LOS VICIOS! </h3>

                <p>Encuentra tratamiento de adicciones con nosotros.</p>

                <p>Clínica de Rehabilitación Hacienda Santa Clara A.C., es una de las mejores en el ramo. Atendemos todas las solicitudes de ayuda, impulsando un estilo de vida saludable en los miembros de nuestra sociedad.</p>

                <p>Manejamos tratamientos especializados para los siguientes problemas: </p>

                <ul>
                    <li>Alcoholismo</li>
                    <li>Anorexia</li>
                    <li>Depresión</li>
                    <li>Drogadicción</li>
                    <li>Bulimia</li>
                    <li>Ludopatía</li>
                </ul>

                <p>Somos el centro de rehabilitación más efectivo en Ecatepec de Morelos, Estado de México (INSERTAR DIRECCIÓN COMPLETA)</p>
                <p>En Clínica de Rehabilitación Hacienda Santa Clara A.C. recibe información detallada de los servicios que brindamos.</p>
                <p>Comunícate para recibir atención por parte de un calificado grupo de profesionales.</p>
            </div>
        </div>
    </div>
</section>

<footer class="page-footer blue darken-1">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <div>
                    <img src="{{ asset('Img/logo.jpg') }}" alt="logo" width="100px" height="100px">
                </div>

                <strong>¡ALÉJATE DE LOS VICIOS!</strong>
                <p class="grey-text text-lighten-4">
                    Encuentra tratamiento de adicciones con nosotros. <br>
                    Clínica de Rehabilitación Hacienda Santa Clara A.C., es una de las mejores en el ramo. Atendemos todas las solicitudes de ayuda, impulsando un estilo de vida saludable en los miembros de nuestra sociedad.

                </p>
            </div>
            <div class="col l4 offset-l2 s12 sitemap">
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Home</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Nosotros</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Instalaciones</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Tratamiento</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Contacto</a></li>
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
        var elems = document.querySelectorAll('.carousel');
        var instances = M.Carousel.init(elems, {
            duration: 200,
            fullWidth: true,
            indicators: true,
        });
    });

    //ciclo();

    function ciclo() {
        setTimeout(()=> {
            var instance = M.Carousel.getInstance(document.querySelector('.carousel'));
            instance.next();
            ciclo();
        }, 7000);
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
