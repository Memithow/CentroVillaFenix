@extends('welcome')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s10 title">
            <h1><b>Tú</b> no <b>eres</b> culpable por estar sufriendo, pero sí eres <b>responsable</b> de sanarte.</h1>
        </div>
    </div>
</div>
<div class="cta blue-grey lighten-5">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <span><a href="#">Conoce nuestras instalaciones</a></span><br><br>
                <div class="carousel carousel-galery">
                    <a class="carousel-item" href="#one!"><img src="{{ asset('Img/08c0773b-73d6-4d1b-88b1-aa121533a75b.JPG') }}"></a>
                    <a class="carousel-item" href="#two!"><img src="{{ asset('Img/08c0773b-73d6-4d1b-88b1-aa121533a75b.JPG') }}"></a>
                    <a class="carousel-item" href="#three!"><img src="{{ asset('Img/08c0773b-73d6-4d1b-88b1-aa121533a75b.JPG') }}"></a>
                    <a class="carousel-item" href="#four!"><img src="{{ asset('Img/08c0773b-73d6-4d1b-88b1-aa121533a75b.JPG') }}"></a>
                    <a class="carousel-item" href="#five!"><img src="{{ asset('Img/08c0773b-73d6-4d1b-88b1-aa121533a75b.JPG') }}"></a>
                </div>
                <strong>Con nosotros puedes lograrlo en 1, 2, 4 o 17 semanas.</strong>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row valign-wrapper">
        <div class="col s8">
            <p><span>¿EMPEZAMOS?</span></p>
            <strong><b>¿Quieres ayuda?</b> Solo tienes que seguir estos tres sencillos pasos: </strong>
            <ol class="ol-animate">
                <li>Contáctanos</li>
                <li>Pregúntanos</li>
                <li>Platícanos</li>
            </ol>
            <p>Cuéntanos  tu caso para que nuestros expertos te orienten y puedas abordar el tema de la mejor manera. Si tu ser querido está de acuerdo puede ingresar a nuestras instalaciones a cualquier hora los 365 días del año.</p>
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

<div class="valores">
    <div></div>
</div>

<div class="container">
    <div class="row">
        <div class="col l12 m12 z-depth-5 my-50">
            <div class="middle-content">
                <div class="row valign-wrapper">
                    <div class="col s12 m6 middle-content-text">
                        <span>¿Quién puede ingresar?</span>
                        <p>Nuestras instalaciones están optimizadas para recibir a una amplia variedad de personas. Puedes hablarle de nosotros a tu hijo o hija, a tu esposo o esposa, a tu padre o tu madre, a tus amigos y hasta a tus vecinos. Ten por seguro que aquí se sentirán protegidos.</p>
                    </div>
                    <div class="col s12 m6 img-ingresar">
                    </div>
                </div>
            </div>

        </div>
        <div class="col l12 m12 z-depth-5">
            <div class="middle-content">
                <div class="row valign-wrapper">
                    <div class="col s12 m6 img-querido">
                    </div>
                    <div class="col s12 m6 middle-content-text">
                        <span>¿Tu ser querido no quiere venir?</span>
                        <p>¡No te preocupes! Nosotros te orientamos acerca de cómo proceder de forma positiva a través de un <b>sustento profesional de intervención en crisis</b>, porque todos merecemos un mejor estilo de vida.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="cta blue-grey lighten-5">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <strong><b>Tratamiento de trastornos emocionales y conductas autodestructivas.</b></strong>
            </div>
            <div class="col s12">
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

<div class="profecionistas">

</div>

<div class="container">
    <div class="row">
        <div class="col s4">
            <span>¿Cómo lo logramos?</span>
        </div>

        <div class="col s8">
            <p>Trabajamos en un ambiente de respeto y confidencialidad donde los principios de empatía, dignidad, calidez y hermandad son fundamentales para guiar  nuestro tratamiento terapéutico mixto.</p>

            <p>Nuestro tratamiento está dividido en los siguientes niveles:</p>
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

@endsection
