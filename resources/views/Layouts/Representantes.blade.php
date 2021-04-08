@extends('welcome')

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
            <div class="col-lg-6 d-flex">
                <div class="rounded-circle representante-foto hector-rep" onclick="tooltip1.show()"></div>
                <div class="align-self-center ms-3 ms-md-5" id="representante-1" data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="right" title="Reseña Curricular 1">Hector</div>
            </div>
        </div>
        <div class="row ms-0 ms-md-5 mb-5">
            <div class="col-lg-6 d-flex">
                <div class="rounded-circle representante-foto carlos-rep" onclick="tooltip2.show()"></div>
                <div class="align-self-center ms-3 ms-md-5" id="representante-2" data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="right" title="Reseña Curricular 2">Carlos</div>
            </div>
        </div>
        <div class="row ms-0 ms-md-5 mb-5">
            <div class="col-lg-6 d-flex">
                <div class="rounded-circle representante-foto horacio-rep" onclick="tooltip3.show()"></div>
                <div class="align-self-center ms-3 ms-md-5" id="representante-3" data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="right" title="
                <h4>Formación:</h4>
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
                    </ul>">
                </div>
            </div>
        </div>
    </div>

    @include('partials.btnContacto')
@endsection

@section('script')
    <script>
        var exampleEl1 = document.getElementById('representante-1');
        var tooltip1 = new bootstrap.Tooltip(exampleEl1);
        var exampleEl2 = document.getElementById('representante-2');
        var tooltip2 = new bootstrap.Tooltip(exampleEl2);
        var exampleEl3 = document.getElementById('representante-3');
        var tooltip3 = new bootstrap.Tooltip(exampleEl3);
    </script>
@endsection
