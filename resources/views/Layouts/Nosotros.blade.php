@extends('welcome')

@section('content')
    <div class="container mx-width">
        <div class="row pt-5 px-5 mt-5">
            <div class="col-lg-4 d-flex justify-content-center">
                <div class="mision-img rounded-3"></div>
            </div>
            <div class="col-lg-8">
                <h3 class="fw-bold text-red fs-2">MISIÓN</h3>
                <p>Asistir en el desarrollo del ser humano fomentando los cambios que este requiera para promover patrones de vida positivos y que le permitan satisfacer sus necesidades de una manera saludable.</p>
            </div>
        </div>
        <div class="row px-5 pb-5 mt-ofset mt-sm-important">
            <div class="col-lg-8 text-end">
                <h3 class="fw-bold text-red fs-2">VISIÓN</h3>
                <p>Llevar a los internos a una rehabilitación con resultados reales y  bajas probabilidades de recaída, así como el fortalecimiento de su autoestima, dignidad y seguridad mediante un apoyo multidisciplinario.</p>
            </div>
            <div class="col-lg-4 d-flex justify-content-center">
                <div class="vision-img rounded-3"></div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-sm-12 text-center">
                <h2 class="fw-bold mb-3 text-azul-marino">¿CÓMO LO LOGRAMOS?</h2>
                <p class="text-azul-darck">Trabajamos en un ambiente de <b>respeto</b> y <b>confidencialidad</b> donde los principios de <b>empatía</b>, <b>dignidad</b>, <b>calidez</b> y <b>hermandad</b> son fundamentales para guiar  nuestro tratamiento terapéutico mixto.</p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-sm-12">
                <h2 class="fw-bold mb-3 text-red text-end fs-1">HISTORIA</h2>

                <p>Centro Villa Fénix A.C. tiene su origen en el estado de Morelos aunque sus raíces se encuentran en Villa Nicolás Romero, Estado de México.</p>

                <p>Hace más de 20 años nuestro director, el Sr. Héctor Almaguer Zúñiga inicia este camino de manera personal al vivenciar de cerca estar inmerso en su propia situación de adicción. Para el año 2000, Héctor empieza su evolución a partir del trabajo psicológico y con ayuda del programa de AA.</p>

                <p><img src="{{ asset('Img/hector.jpg') }}" alt="" width="400px" align="right" class="m-4"> En aquellos ayeres la metodología tenía muchas carencias y ausencias, no había psicólogos preparados en adicciones, consejeros certificados para el abordaje de esta enfermedad, personal médico que atendiera la salud y mucho menos un trato apegado a los derechos humanos, lo cual promovía conflictos, desacuerdos, molestias puesto que se creó otro paradigma que fracturó los “mitos” que durante muchos años se habían sostenido en cómo debía trabajarse con usuarios a drogas y trastornos mentales en tratamientos residenciales.
                </p>

                <p>En el año 2010 se toma la decisión de llevar la “semilla” de lo aprendido a Villa Nicolás Romero donde se inicia una labor a través de ofrecer a la población un centro con personal profesionalizado en el abordaje de las adicciones, un trato digno en cuanto al respeto del ser humano, que las necesidades básicas de los usuarios tengan que ser debidamente resueltas y así dar inicio a una labor que ha llevado a Centro Villa Fénix A.C. ser uno de las instituciones dedicadas al tratamiento de las adicciones más reconocidas en el municipio de Villa Nicolás</p>

                <p>En nuestras instalaciones contamos con áreas específicas para mujeres y hombres, desde el ingreso el usuario y su familia son recibidos con cordialidad y respeto; abrimos nuestras puertas para que las personas puedan conocer directamente nuestras instalaciones.</p>

                <p>Hoy en día Centro Villa Fénix A.C. es una realidad, creemos firmemente que la psicología y el programa de AA se complementan y enriquecen, el camino ha sido difícil pero somos una institución que sigue creciendo y ofreciendo lo mejor.</p>

            </div>
        </div>
    </div>

    @include('partials.btnContacto')
@endsection
