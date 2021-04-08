@extends('welcome')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 my-5 text-center slogan">
            <strong><span>TÚ</span> no <span>ERES</span> culpable de estar sufriendo, <br>
                pero sí eres <span>RESPONSABLE</span> de sanarte.</strong>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-lg-7 my-3 text-center">
            <p>¿Quieres ayuda? Solo tienes que seguir estos tres sencillos pasos: </p>

            <div class="col-sm-12 d-flex my-4 justify-content-center arrows">
                <div class="mx-2">
                    <div class="text-center fw-bolder text-white bg-dark">CONTÁCTANOS</div><div class="triangle"></div>
                </div>
                <div class="mx-2">
                    <div class="text-center fw-bolder text-white bg-dark">PREGÚNTANOS</div><div class="triangle"></div>
                </div>
                <div class="mx-2">
                    <div class="text-center fw-bolder text-white bg-dark">PLATÍCANOS</div><div class="triangle"></div>
                </div>
            </div>

            <p>Cuéntanos  tu caso para que nuestros expertos te orienten y puedas abordar el tema de la mejor manera. Si tu ser querido está de acuerdo puede ingresar a nuestras instalaciones a cualquier hora los 365 días del año.</p>

            <p>De lo contrario, nuestros expertos te pueden orientar para que abordes el tema de manera positiva a través de un
                <strong class="crisis">sustento profesional de intervención en crisis</strong>, porque todos merecemos un mejor estilo de vida.</p>
        </div>

        <div class="col-sm-12 col-lg-1 my-3 text-center"></div>

        <div class="col-sm-12 col-lg-3 align-self-center">
            <form action="">
                <div class="rounded-3 py-3 form-contact px-2">
                    <div class="mb-3">
                        <label for="nombre" class="form-label text-white">Nombre</label>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-white">Email</label>
                        <input type="email" class="form-control" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label text-white">Mensaje</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-menu">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row my-5">
        <div class="col-md-6 col-lg-3 p-3 text-center enlaces-home">
            <a href="{{ route('atendemos') }}"><div class="rounded-3 mx-auto enlace-atendemos"></div></a>
            <span class="text-azul-marino">A quién <br>atendemos</span>
        </div>
        <div class="col-md-6 col-lg-3 p-3 text-center enlaces-home">
            <a href="{{ route('representantes') }}"><div class="rounded-3 mx-auto enlace-representantes"></div></a>
            <span class="text-azul-marino">Representantes</span>
        </div>
        <div class="col-md-6 col-lg-3 p-3 text-center enlaces-home">
            <a href="{{ route('instalaciones') }}"><div class="rounded-3 mx-auto enlace-instalaciones"></div></a>
            <span class="text-azul-marino">Instalaciones</span>
        </div>
        <div class="col-md-6 col-lg-3 p-3 text-center enlaces-home">
            <a href="{{ route('nosotros') }}"><div class="rounded-3 mx-auto enlace-centro-v-f"></div></a>
            <span class="text-azul-marino">Centro <br>Villa Fenix</span>
        </div>
    </div>
</div>
@endsection
