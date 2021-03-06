@extends('welcome')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center mt-5 mb-4">
                <h2 class="fw-bolder text-red">Metodología</h2>
                <strong class="fw-light fs-6">Nuestros tratamientos están divididos <br>en los siguientes niveles:</strong>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="carrousel-content position-relative mb-5 col-lg-10 px-0">
                <div id="carrusel-difuminado" class="w-100 carousel slide position-absolute" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active webkit-right">
                            <div class="metodologia-1 item-carrusel-personalizado"></div>
                        </div>
                        <div class="carousel-item webkit-right">
                            <div class="item-carrusel-personalizado metodologia-2"></div>
                        </div>
                        <div class="carousel-item webkit-right">
                            <div class="item-carrusel-personalizado metodologia-3"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 padding-dropdowns-titulos px-3" id="container-dropdowns-titulos">
                    <div class="titulos-dropdown" data-bs-toggle="collapse" href="#etapa-1" role="button" aria-expanded="false" aria-controls="etapa-1">
                        <div class="arrows">
                            <div>
                                <div class="bg-azul-claro"><span class="fs-6 text-azul-marino">Etapa I</span></div><div class="triangle-blue"></div><p class="fs-6">Desintoxicación y valoración médica</p>
                            </div>
                        </div>
                        <div class="collapse mb-4" id="etapa-1">
                            <div class="card card-body">
                                <p><b>Objetivo:</b>Conseguir un nivel óptimo de energía que los impulse a ser productivos y
                                    trabajar en reconstruirse.</p>
                                <ol>
                                    <li>Reajuste del sueño y alimentación.</li>
                                    <li>Cambio de estilo de hábitos.</li>
                                    <li>Evaluación psicológica y médica.</li>
                                    <li>Proceso de desintoxicación (de ser necesario).</li>
                                    <li>Ejercicio aeróbico y de tono muscular.</li>
                                    <li>Introducción a las heridas sufridas en la infancia y adolescencia.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="titulos-dropdown" data-bs-toggle="collapse" href="#etapa-2" role="button" aria-expanded="false" aria-controls="etapa-2">
                        <div class="arrows ">
                            <div>
                                <div class="bg-azul-claro"><span class="fs-6 text-azul-marino">Etapa II</span></div><div class="triangle-blue"></div><p class="fs-6">Valoración y atención Psicológica</p>
                            </div>
                        </div>
                        <div class="collapse mb-4" id="etapa-2">
                            <div class="card card-body">
                                <p><b>Objetivo:</b> Capacitarlos sobre cómo mantener sano su sistema emocional y mental.</p>
                                <ol>
                                    <li>Desarrollo psicosexual.</li>
                                    <li>Abordaje de la personalidad adictiva.</li>
                                    <li>Vida emocional.</li>
                                    <li>Resentimientos.</li>
                                    <li>Codependencia.</li>
                                    <li>Estructura del ser humano.</li>
                                    <li>Abordaje de la estructura de la personalidad (neurosis, trastornos de identidad y/o psicosis).</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="titulos-dropdown" data-bs-toggle="collapse" href="#etapa-3" role="button" aria-expanded="false" aria-controls="etapa-3">
                        <div class="arrows">
                            <div>
                                <div class="bg-azul-claro"><span class="fs-6 text-azul-marino">Etapa III</span></div><div class="triangle-blue"></div><p class="fs-6">Terapias Alternativas</p>
                            </div>
                        </div>
                        <div class="collapse mb-4" id="etapa-3">
                            <div class="card card-body">
                                <p><b>Objetivo: </b>Aprender a identificar a través de estrategias los factores de riesgo y de protección, así como la implementación de estilos de afrontamiento efectivos para el mantenimiento de la abstinencia y/o salud mental</p>
                                <ol>
                                    <li>Liderazgo “Maxwell”.</li>
                                    <li>Desarrollo de habilidades para la vida (sociales, emocionales y cognitivas).</li>
                                    <li>De malas conductas a nuevos hábitos.</li>
                                    <li>Proyecto de vida.</li>
                                    <li>Plan de prevención de recaídas.</li>
                                    <li>Desarrollo de algún servicio en nuestro centro.</li>
                                    <li>Autoestima.</li>
                                    <li>Asertividad.</li>
                                    <li>Manejo del tiempo libre.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="titulos-dropdown" data-bs-toggle="collapse" href="#etapa-4" role="button" aria-expanded="false" aria-controls="etapa-4">
                        <div class="arrows">
                            <div>
                                <div class="bg-azul-claro"><span class="fs-6 text-azul-marino">Etapa IV</span></div><div class="triangle-blue"></div><p class="fs-6">Atención Familiar</p>
                            </div>
                        </div>
                        <div class="collapse mb-4" id="etapa-4">
                            <div class="card card-body">
                                <p><b>Objetivo: </b>Proceso de sanación integral para enseñar a curar las enfermedades emocionales, mentales y del espíritu, que suceden en el transcurso de la vida.</p>
                                <ol>
                                    <li>4° y 5° paso del programa de AA.</li>
                                    <li>Oración y meditación.</li>
                                    <li>Esclavitud.</li>
                                    <li>Dependencias.</li>
                                    <li>Defectos de carácter (orgullo, ira, envidia, avaricia, pereza, lujuria y gula).</li>
                                    <li>Retiro espiritual de 3 días llevado a cabo en una hacienda.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.btnContacto')
@endsection

@section('script')
    <script>
        document.addEventListener('click', event => {
            let el = event.target;
            document.querySelectorAll('.titulos-dropdown').forEach(e => {
                if(e.ariaExpanded == 'true'){
                    document.querySelector('#container-dropdowns-titulos').classList.remove('padding-dropdowns-titulos');
                    document.querySelectorAll('.titulos-dropdown').forEach(ee => {
                        if(ee.ariaExpanded == 'false'){
                            ee.classList.add('visually-hidden');
                        }else{
                            ee.classList.add('change-dropdown');
                        }
                    });
                }
            });

            if(document.querySelectorAll(".titulos-dropdown[aria-expanded='false']").length == 4){
                document.querySelectorAll('.titulos-dropdown').forEach(ee => {
                    ee.classList.remove('visually-hidden');
                    ee.classList.remove('change-dropdown');
                });
                document.querySelector('#container-dropdowns-titulos').classList.add('padding-dropdowns-titulos');
            }
        });

        var carousel = new bootstrap.Carousel(document.querySelector('#carrusel-difuminado'));

        cambio_slede_opaco();

        function cambio_slede_opaco(){
            setTimeout(() => {
                carousel.next();
                cambio_slede_opaco();
            }, 5000);
        }

    </script>
@endsection
