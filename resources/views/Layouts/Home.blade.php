@extends('welcome')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 my-5 text-center slogan">
            <strong class="text-azul-marino"><span>TÚ</span> no <span>ERES</span> culpable de estar sufriendo, <br>
                pero sí eres <span>RESPONSABLE</span> de sanarte.</strong>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-lg-7 my-3 text-center">
            <p>¿Quieres ayuda? Solo tienes que seguir estos tres sencillos pasos: </p>

            <div class="col-sm-12 d-flex my-4 justify-content-center arrows">
                <div class="mx-2">
                    <div class="text-center fw-bolder text-white bg-alul-darck">CONTÁCTANOS</div><div class="triangle"></div>
                </div>
                <div class="mx-2">
                    <div class="text-center fw-bolder text-white bg-alul-darck">PREGÚNTANOS</div><div class="triangle"></div>
                </div>
                <div class="mx-2">
                    <div class="text-center fw-bolder text-white bg-alul-darck">PLATÍCANOS</div><div class="triangle"></div>
                </div>
            </div>

            <p>Cuéntanos  tu caso para que nuestros expertos te orienten y puedas abordar el tema de la mejor manera. Si tu ser querido está de acuerdo puede ingresar a nuestras instalaciones a cualquier hora los 365 días del año.</p>

            <p>De lo contrario, nuestros expertos te pueden orientar para que abordes el tema de manera positiva a través de un
                <strong class="crisis">sustento profesional de intervención en crisis</strong>, porque todos merecemos un mejor estilo de vida.</p>
        </div>

        <div class="col-sm-12 col-lg-1 my-3 text-center"></div>

        <div class="col-sm-12 col-lg-3 align-self-center">
            <form action="{{ route('formContactMail') }}" method="POST">
                @csrf
                <div class="rounded-3 py-3 form-contact px-2">
                    <div class="mb-3">
                        <label for="nombre" class="form-label text-white">Nombre</label>
                        <input type="text" class="form-control" placeholder="" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-white">Teléfono</label>
                        <input type="text" class="form-control" placeholder="" name="telefono">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label text-white">Mensaje</label>
                        <textarea class="form-control" name="mensaje"></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-menu text-white">Enviar</button>
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

    <div class="row mb-5 d-flex justify-content-center">
        <div class="col-sm-10">
            <h2 class="fw-bold mb-3 text-red">OBJETIVO VILLA FÉNIX</h2>
            <p class="text-end">El objetivo principal es la de ayudar a aquellas personas que sufren la enfermedad de la adicción y trastornos emocionales, a sus familias, guiándolos en la recuperación y ayudándolos a reinsertarse en la sociedad. Tras 20 años ofreciendo tratamiento para la adicción, la sede principal se encuentra en el municipio de Villa Nicolás Romero, Estado de México. Centro Villa Fénix A.C., cuenta con la infraestructura y personal profesionalizado que aseguran la continuidad de la ayuda a los pacientes durante las fases del tratamiento que ofrecemos. El tratamiento es individual grupal y familiar.</p>
        </div>
    </div>

    <div class="row mb-5 d-flex justify-content-center">
        <div class="col-sm-10 col-md-5 align-self-center">
            <div class="video-valores">
                <iframe width="380" height="210" src="https://www.youtube.com/embed/JZVV4RDnnxE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-sm-12 col-md-5">
            <h3 class="fw-bold mb-3 text-red">VALORES VILLA FÉNIX</h3>
            <p class="">El objetivo principal es la de ayudar a aquellas personas que sufren la enfermedad de la adicción y trastornos emocionales, a sus familias, guiándolos en la recuperación y ayudándolos a reinsertarse en la sociedad.</p>
            <p>Tras 20 años ofreciendo tratamiento para la adicción, la sede principal se encuentra en el municipio de Villa Nicolás Romero, Estado de México. Centro Villa Fénix A.C., cuenta con la infraestructura y personal profesionalizado que aseguran la continuidad de la ayuda a los pacientes durante las fases del tratamiento que ofrecemos. El tratamiento es individual grupal y familiar.</p>
        </div>
        <div class="col-sm-12 col-md-4">
            <ul class="list-style-none">
                <li>1. Dignidad humana.</li>
                <li>2. Igualdad.</li>
                <li>3. Seguridad.</li>
                <li>4. Respeto.</li>
                <li>5. No discriminación</li>
                <li>6. Integridad física, psicológica y moral.</li>
            </ul>
        </div>
        <div class="col-sm-12 col-md-4">
            <ul class="list-style-none">
                <li>7. No violencia de ningún tipo.</li>
                <li>8. Honestidad.</li>
                <li>9. Humildad.</li>
                <li>10. Responsabilidad.</li>
                <li>11. Compromiso.</li>
            </ul>
        </div>
    </div>
</div>
@endsection
