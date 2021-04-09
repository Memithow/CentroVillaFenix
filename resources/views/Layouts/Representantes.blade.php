@extends('welcome')

@section('css')
    <style>
        .tooltip-inner{
            max-width: 50%;
            text-align: left;
        }
    </style>

@endsection

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center my-5">
            <div class="col-lg-4 text-end">
                <p>Cada miembro de la institución y del equipo de terapeutas  juega un papel importante en el proceso de reinserción social de cada usuario y por eso son nuestra cara ante ti.</p>
                <p>Te presentamos a algunos de nuestros terapeutas.</p>
            </div>
            <div class="col-lg-4 align-self-center mt-5 mt-md-0">
                <h1 class="fs-1 fw-bold text-azul-marino">REPRESENTANTES</h1>
            </div>
        </div>

        <div class="row ms-0 ms-md-5 mb-5">
            <div class="col d-flex">
                <div class="rounded-circle representante-foto hector-rep"></div>
                <div class="align-self-center ms-3 ms-md-5">
                    <p><b class="text-azul-marino">Hector Almaguer</b> <br><small>Director General<br>
                            <a data-bs-toggle="collapse" href="#hector-rep" role="button" aria-expanded="false" aria-controls="hector-rep">Ver...</a></small>
                        </p>
                    <div class="collapse collapse-p" id="hector-rep">
                        <div class="card card-body">
                            <h4 class="text-red">Formación:</h4>
                            <div class='text-rigth'>
                                <ul>
                                    <li>Diplomado en farmacodependencia por la Universidad Nacional Autónoma de Morelos</li>
                                    <li>Consejería en adicciones 20 años de experiencia</li>
                                    <li>Consejería e intervención en familias</li>
                                    <li>Cursos y talleres con valor curricular bajo la supervisión del Maestro Psicólogo Arturo González Luna con formación analítica</li>
                                    <li>20 años de experiencia en el programa de A.A</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row ms-0 ms-md-5 mb-5">
            <div class="col d-flex">
                <div class="rounded-circle representante-foto horacio-rep"></div>
                <div class="align-self-center ms-3 ms-md-5">
                    <p><b class="text-azul-marino">Luis Horacio Vázquez</b> <br> <small>Responsable del área clínica<br>
                            <a data-bs-toggle="collapse" href="#horacio-rep" role="button" aria-expanded="false" aria-controls="horacio-rep">Ver...</a></small>
                        </p>
                    <div class="collapse collapse-p" id="horacio-rep">
                        <div class="card card-body">
                            <h4 class="text-red">Formación:</h4>
                            <div class="text-start">
                                <ul>
                                    <li>Licenciatura en psicología Centro Internacional de Estudios Superiores de Morelos y Universidad De Educación a Distancia sede Morelos</li>
                                    <li>Diplomado en farmacodependencia por parte de la Universidad Autónoma de Morelos</li>
                                    <li>Certificación Nacional por parte de CONADIC/CENADIC/SEP</li>
                                    <li>Certificación Internacional en Patología Dual por parte de University Cognosity Dual Patology El Paso TX</li>
                                    <li>Técnico Superior Universitario en Consejería en Adicciones y Conductas Antisociales por parte de la Universidad del Conde Veracruz Veracruz</li>
                                    <li>Diversos cursos y talleres relacionados con las adicciones y conductas antisociales</li>
                                    <li>Formación en intervención con familias y adictos por parte del Maestro Psicólogo Arturo Gonzalez Luna En Ave Fénix Sanación Integral</li>
                                    <li>19 años en el abordaje de la prevención, intervención y mantenimiento de adicciones y abstinencia.</li>
                                    <li>Consulta ambulatoria privada, conferencista y aplicación de talleres con enfoque psicodinámico.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--<div class="row ms-0 ms-md-5 mb-5">
            <div class="col-lg-6 d-flex">
                <div class="rounded-circle representante-foto carlos-rep" onclick="tooltip2.show()"></div>
                <div class="align-self-center ms-3 ms-md-5" id="representante-2" data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="right" title="Reseña Curricular 2">Carlos</div>
            </div>
        </div>--}}
    </div>

    @include('partials.btnContacto')
@endsection
