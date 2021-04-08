@extends('welcome')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 my-5 text-center">
                <h2 class="text-red">¿A quién atendemos?</h2>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="carrousel-content position-relative mb-5 col-lg-10 col-md-10">

                    <div id="carrusel-difuminado" class="w-100 carousel slide position-absolute" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active webkit-right">
                                <div class="atendemos-1 item-carrusel-personalizado"></div>
                            </div>
                            <div class="carousel-item webkit-right">
                                <div class="item-carrusel-personalizado atendemos-2"></div>
                            </div>
                            <div class="carousel-item webkit-right">
                                <div class="item-carrusel-personalizado atendemos-3"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-5 atendemos-text">
                        <p>Nuestras instalaciones están optimizadas para recibir a una amplia variedad de personas.</p>

                        <p>Puedes hablarle de nosotros a tu hijo o hija, a tu esposo o esposa, a tu padre o tu madre, a tus amigos y hasta a tus vecinos. Ten por seguro que aquí se sentirán protegidos.</p>

                        <button onclick="tooltip.show(); this.classList.remove('bg-red'); this.classList.add('btn-menu')" id="example" type="button" class="btn bg-red text-white" data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="right" title="¡No te preocupes! Nosotros te orientamos acerca de cómo proceder de forma positiva a través de un sustento profesional de intervención en crisis, porque todos merecemos un mejor estilo de vida.">¿Tu ser querido no <br>quiere venir?</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('partials.btnContacto')
@endsection


@section('script')
    <script>
        var exampleEl = document.getElementById('example');
        var tooltip = new bootstrap.Tooltip(exampleEl);

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
