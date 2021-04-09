@extends('welcome')

@section('content')
    <div class="container">
        <div class="row my-5 d-flex justify-content-center">
            <div class="col-sm-12 col-md-6">
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
            <div class="col-sm-12 col-md-6 text-center datos-contacto px-5 align-self-center py-md-0 py-5">
                <span>Dirección</span>
                <address>Calle Ciprés, Lote 3 y 4, Zaragoza, <br>Villa Nicolás Romero, México</address>
                <div class="divider mx-5"></div>
                <span>Teléfonos</span>
                <p>Hector Almaguer (Director general) <br> 55 2254 8306 <br>
                    Luis Horacio Vázquez (Responsable del área clínica) <br> 55 8285 5906</p>
                <div class="divider mx-5"></div>
                <span>Correo</span><br>
                <a href="mailto:info@montefenix.org.mx">villafenixacinfo@gmail.com</a>
            </div>
        </div>
        <div class="divider"></div>
        <div class="row mb-5">
            <div class="col s12">
                <span>Mapa</span>
                <div class="my-50">
                    <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Calle%20Cipr%C3%A9s%20Lote%203%20y%204,%20Zaragoza,%20Villa%20Nicol%C3%A1s%20Romero,%20M%C3%A9xico&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
