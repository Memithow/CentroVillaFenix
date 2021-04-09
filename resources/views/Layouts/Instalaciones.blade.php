@extends('welcome')

@section('css')
    <style>
        .carousel-item{
            text-align: center;
        }

        .carousel-control-next-icon {
            background-color: black;
        }

        .carousel-control-prev-icon {
            background-color: black;
        }
    </style>
@endsection

@section('content')
    <div class="text-center mt-5">
        <h1 class="fs-1 fw-bold text-azul-marino">Instalaciones</h1>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div id="carrousel-instalaciones" class="carousel slide my-5 col-sm-12 col-md-11 col-lg-9" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item w-100 instalaciones-item active">
                        <img height="100%" src="{{ asset('Img/Instalaciones/1.jpeg') }}">
                    </div>
                    <div class="carousel-item w-100 instalaciones-item">
                        <img height="100%" src="{{ asset('Img/Instalaciones/2.jpeg') }}">
                    </div>
                    <div class="carousel-item w-100 instalaciones-item">
                        <img height="100%" src="{{ asset('Img/Instalaciones/3.jpeg') }}">
                    </div>
                    <div class="carousel-item w-100 instalaciones-item">
                        <img height="100%" src="{{ asset('Img/Instalaciones/4.jpeg') }}">
                    </div>
                    <div class="carousel-item w-100 instalaciones-item">
                        <img height="100%" src="{{ asset('Img/Instalaciones/5.jpeg') }}">
                    </div>
                    <div class="carousel-item w-100 instalaciones-item">
                        <img height="100%" src="{{ asset('Img/Instalaciones/6.jpeg') }}">
                    </div>
                    <div class="carousel-item w-100 instalaciones-item">
                        <img height="100%" src="{{ asset('Img/Instalaciones/7.jpeg') }}">
                    </div>
                    <div class="carousel-item w-100 instalaciones-item">
                        <img height="100%" src="{{ asset('Img/Instalaciones/8.jpeg') }}">
                    </div>
                    <div class="carousel-item w-100 instalaciones-item">
                        <img height="100%" src="{{ asset('Img/Instalaciones/9.jpeg') }}">
                    </div>
                    <div class="carousel-item w-100 instalaciones-item">
                        <img height="100%" src="{{ asset('Img/Instalaciones/10.jpeg') }}">
                    </div>
                    <div class="carousel-item w-100 instalaciones-item">
                        <img height="100%" src="{{ asset('Img/Instalaciones/11.jpeg') }}">
                    </div>
                    <div class="carousel-item w-100 instalaciones-item">
                        <img height="100%" src="{{ asset('Img/Instalaciones/12.jpeg') }}">
                    </div>
                    <div class="carousel-item w-100 instalaciones-item">
                        <img height="100%" src="{{ asset('Img/Instalaciones/13.jpeg') }}">
                    </div>
                    <div class="carousel-item w-100 instalaciones-item">
                        <img height="100%" src="{{ asset('Img/Instalaciones/14.jpeg') }}">
                    </div>
                    <div class="carousel-item w-100 instalaciones-item">
                        <img height="100%" src="{{ asset('Img/Instalaciones/15.jpeg') }}">
                    </div>
                    <div class="carousel-item w-100 instalaciones-item">
                        <img height="100%" src="{{ asset('Img/Instalaciones/16.jpeg') }}">
                    </div>
                </div>
                <a class="carousel-control-prev text-black" href="#carouselExampleIndicators" role="button" data-slide="prev" onclick="car_ins.prev()">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next text-black" href="#carouselExampleIndicators" role="button" data-slide="next" onclick="car_ins.next()">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>


    @include('partials.btnContacto')
@endsection

@section('script')
    <script>
        const car_ins = new bootstrap.Carousel(document.querySelector('#carrousel-instalaciones'), { interval: 60000 });
    </script>
@endsection
