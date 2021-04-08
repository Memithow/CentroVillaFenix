@extends('welcome')

@section('content')
    <div class="text-center mt-5">
        <h1 class="fs-1 fw-bold text-azul-marino">Instalaciones</h1>
    </div>
    <div class="row d-flex justify-content-center">
        <div id="carrousel-instalaciones" class="carousel slide my-5 col-sm-12 col-md-11 col-lg-9" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('Img/Instalaciones/1.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('Img/Instalaciones/2.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('Img/Instalaciones/3.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('Img/Instalaciones/4.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('Img/Instalaciones/5.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('Img/Instalaciones/6.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('Img/Instalaciones/7.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('Img/Instalaciones/8.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('Img/Instalaciones/9.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('Img/Instalaciones/10.jpg') }}">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" onclick="car_ins.prev()">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" onclick="car_ins.next()">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    @include('partials.btnContacto')
@endsection

@section('script')
    <script>
        const car_ins = new bootstrap.Carousel(document.querySelector('#carrousel-instalaciones'));
    </script>
@endsection
