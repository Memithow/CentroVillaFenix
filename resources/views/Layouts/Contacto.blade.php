@extends('welcome')

@section('content')
    <div class="container">
        <div class="row my-50 valign-wrapper">
            <div class="col s12 m6 light-blue darken-4">
                <form>
                    <div class="row form-contact">
                        <span class="white-text">Contacto</span>
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
            <div class="col s12 m6 datos-contacto">
                <span>Dirección</span>
                <p>Calle Ciprés Lote 3 y 4, Zaragoza, <br>Villa Nicolás Romero, México</p>
                <div class="divider"></div>
                <span>Telenonos</span>
                <p>Carlos Arzave - 55 4619 5486 <br>
                Hector Almaguer - 55 2254 8306 <br>
                Oficina - 55 5821 3104</p>
                <div class="divider"></div>
                <span>Correo</span><br><br>
                <a href="mailto:info@montefenix.org.mx">info@montefenix.org.mx</a>
            </div>
        </div>
        <div class="row my-50">
            <div class="col s12">
                <span>Mapa</span>
                <div class="my-50">
                    <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Calle%20Cipr%C3%A9s%20Lote%203%20y%204,%20Zaragoza,%20Villa%20Nicol%C3%A1s%20Romero,%20M%C3%A9xico&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a href="https://yt2.org"></a><br>
                    <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
                </div>
            </div>
        </div>
    </div>

@endsection
