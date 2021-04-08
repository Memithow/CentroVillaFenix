<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContractController extends Controller
{
    public function sendMail(Request $request){
        $data = [];
        $data["email"]  = 'villafenixacinfo@gmail.com';
        $data["title"]  = 'Contacto desde pagina Web';
        $data["emisor"] = 'villafenixacinfo@gmail.com';
        $data['nombre'] = $request->nombre;
        $data['telefono'] = $request->telefono;
        $data['mensaje'] = $request->mensaje;

        Mail::send('mail.contactMail', $data, function($message)use($data) {
            $message->to($data["email"])
                ->from(env('MAIL_FROM_ADDRESS'), 'Contacto Villa Fenix Web')
                ->subject($data["title"]);
        });

        return redirect()->back();
    }

}


