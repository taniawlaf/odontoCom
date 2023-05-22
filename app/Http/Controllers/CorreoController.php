<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Models\Correos;
use Illuminate\Http\Request;

class CorreoController extends Controller
{
    //
    public function formulario_correo()
    {
    return view("Correo.form_mail");
    }
	public function enviar(Request $request)
 {
    
 $destinatario=$request->input("destinatario");
 $asunto=$request->input("asunto");
 $contenido=$request->input("contenido_mail");
$fecha=date('Y-m-d');
 
 $data = array('contenido' => $contenido);
 $r = Mail::send('Correo.plantilla_correo', $data, function ($message) use ($asunto,$destinatario)
 {
 $message->from('tmunozt@toluca.tecnm.mx', 'OdontoCom');
 $message->to($destinatario)->subject($asunto);
 });
$datos=['destinatario'=>$destinatario,'asunto'=>$asunto,'contenido'=>$contenido,'fecha'=>$fecha];
Correos::create($datos);
 if(!$r){
 return view("Mensajes.plantillamensaje")
->with('var','2')
 ->with('msj','Error al enviar el correo')
 ->with('ruta_boton','bienvenida')
->with('mensaje_boton','correo');
 }else{
 return view("template.correo");
 }
 }
}
