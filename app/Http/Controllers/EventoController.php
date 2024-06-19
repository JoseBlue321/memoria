<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Evento;

class EventoController extends Controller
{

    public function index()
    {
        return view('certificados.evento');
    }
    
    public function show(string $id){
        $evento = Evento::findOrFail($id);
        return view('certificados.registro',[
            'evento'=>$evento,
        ]);
    }


    public function verificacion(Request $request)
    {
        $request->validate([
            //'codigo' => ['exists:App\Models\Evento,codigo'],
            'carnet' => ['exists:App\Models\Participante,carnet'],
        ]);
        //$codigo = $request->input('codigo');
        $carnet = $request->input('carnet');

        $participantes = DB::select("select p.carnet,p.nombre,p.paterno,p.materno,p.correo,p.telefono,p.certificado,p.id, p.tipo, e.codigo,e.evento,e.detalle,e.fecha 
        from eventos e 
        inner join participantes p on e.id = p.evento_id
        where p.carnet = '$carnet'");
        
        if($participantes != null ){
            return view('certificados.participante',[
                'participantes'=>$participantes,
            ]);
        }else{
            return to_route('index.evento');
        }


    }

    public function validacion()
    {
        return view('certificados.validacion');
    }

    public function VerificacionCertificado(Request $request)
    {
        $request->validate([
            'codigo' => ['exists:App\Models\Evento,codigo'],
            'carnet' => ['exists:App\Models\Participante,carnet'],
            'fecha' => ['exists:App\Models\Evento,fecha'],
        ]);
        $codigo = $request->input('codigo');
        $carnet = $request->input('carnet');
        $fecha = $request->input('fecha');

        $validaciones = DB::select("select * from 
        eventos e 
        inner join participantes p on e.id = p.evento_id
        where e.codigo = $codigo and p.carnet = '$carnet' and e.fecha = '$fecha';");

        if($validaciones != null ){
            return view('certificados.check',[
                'validaciones'=>$validaciones,
            ]);
        }else{
            return to_route('validacion.evento');
        }


        return $request;
    }
    public function historial()
    {
        return view('certificados.historial');
    }

    public function verificacionhistorial(Request $request){
        $request->validate([
            'carnet' => ['exists:App\Models\Participante,carnet'],
        ]);
        $carnet = $request->input('carnet');

        $participantes = DB::select("select p.carnet,p.nombre,p.paterno,p.materno,p.correo,p.telefono,p.certificado, e.codigo,e.evento,e.detalle,e.fecha 
        from eventos e 
        inner join participantes p on e.id = p.evento_id
        where p.carnet = '$carnet'");
        
        if($participantes != null ){
            return view('certificados.checkhistorial',[
                'participantes'=>$participantes,
            ]);
        }else{
            return to_route('historial.evento');
        }



    }
}
