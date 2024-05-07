<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participante;
use App\Models\Evento;
//pdf
use Dompdf\Dompdf;
use Dompdf\Options;
//QR
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ParticipanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validamos el formulario de registro
        $request->validate([
            'evento_id'=>['required'],
            //'certificado'=>['nullable'],
            'carnet'=>['required','string'],
            'tipo'=>['required'],
            'grado'=>'nullable',
            'nombre'=>['required','string'],
            'paterno'=>'nullable',
            'materno'=>'nullable',
            'correo'=>'nullable',
            'telefono'=>'nullable',
        ]);

        //almacenamos en la base de datos
        $participante = Participante::create([
            'evento_id'=>$request->input('evento_id'),
            //'certificado'
            'carnet'=>$request->input('carnet'),
            'tipo'=>$request->input('tipo'),
            'grado'=>$request->input('grado'),
            'nombre'=>$request->input('nombre'),
            'paterno'=>$request->input('paterno'),
            'materno'=>$request->input('materno'),
            'correo'=>$request->input('correo'),
            'telefono'=>$request->input('telefono'),
        ]);

        //retornamos una ficha de registro
        $evento = Evento::findOrFail($request->input('evento_id'));
        // URL para el código QR
        $url = "Carnet:$participante->carnet 
        Nombre:$participante->nombre $participante->paterno $participante->materno
        Cod evento: $evento->codigo
        fecha: $evento->fecha ";
        $qr = QrCode::generate($url);
         //************************************** */
         $html = view('certificados.ficharegistro', [
            'evento'=>$evento,
            'participante'=>$participante,
            'qr'=>$qr,
            ])->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->set_option('isRemoteEnabled','true');
        $dompdf->setPaper(array(0, 0, 816, 500), 'portrait'); // Ancho: 100mm, Alto: 200mm
        $dompdf->render();
        return $dompdf->stream("Registro.pdf", ['Attachment' => 0]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
