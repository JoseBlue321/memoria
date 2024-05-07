<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Persona;
use App\Models\Evaluacion;
use App\Models\Solicitud;
//pdf
use Dompdf\Dompdf;
use Dompdf\Options;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class PersonaController extends Controller
{

    public function solicitudes(){
        return view('calificaciones.solicitudes');
    }

    public function plantilla(Request $request){
        $request->validate([
            'nombre'=>['required','string'],
            'celular'=>['required'],
            'correo'=>['required','email'],
            'asignatura'=>['required','string'],
            'carrera'=>['required'],
            'departamento'=>['nullable'],
            'catedra'=>['nullable'],
            'anio'=>['string','required'],
            'tipo'=>['required','string'],
            'fecha_examen'=>['required','date'],
            'numero_preguntas'=>['required'],
        ]);

        Solicitud::create([
            'nombre'=>$request->input('nombre'),
            'celular'=>$request->input('celular'),
            'correo'=>$request->input('correo'),
            'asignatura'=>$request->input('asignatura'),
            'carrera'=>$request->input('carrera'),
            'departamento'=>$request->input('departamento'),
            'catedra'=>$request->input('catedra'),
            'anio'=>$request->input('anio'),
            'tipo'=>$request->input('tipo'),
            'fecha_examen'=>$request->input('fecha_examen'),
            'numero_preguntas'=>$request->input('numero_preguntas'),
        ]);

        $cantidad = $request->input('numero_preguntas');
        if ($cantidad == 100) {
            //************************************** */
            $html = view('calificaciones.plantilla', [
                'solicitud'=>$request,
                ])->render();
            $dompdf = new Dompdf();
            $dompdf->loadHtml($html);
            $dompdf->set_option('isRemoteEnabled','true');
            $dompdf->setPaper([0, 0, 816, 1247], 'portrait');
            $dompdf->render();
            return $dompdf->stream("plantilla.pdf", ['Attachment' => 0]);
            //************************************** */
        }else{
            if ($cantidad == 70) {
            //************************************** */
            $html = view('calificaciones.setenta', [
                'solicitud'=>$request,
                ])->render();
            $dompdf = new Dompdf();
            $dompdf->loadHtml($html);
            $dompdf->set_option('isRemoteEnabled','true');
            $dompdf->setPaper([0, 0, 816, 1247], 'portrait');
            $dompdf->render();
            return $dompdf->stream("plantilla.pdf", ['Attachment' => 0]);
            //************************************** */
                return $cantidad;
            }else{
                if ($cantidad == 50) {
            //************************************** */
            $html = view('calificaciones.cincuenta', [
                'solicitud'=>$request,
                ])->render();
            $dompdf = new Dompdf();
            $dompdf->loadHtml($html);
            $dompdf->set_option('isRemoteEnabled','true');
            $dompdf->setPaper([0, 0, 816, 1247], 'portrait');
            $dompdf->render();
            return $dompdf->stream("plantilla.pdf", ['Attachment' => 0]);
            //************************************** */
                }else{
                    if ($cantidad == 35) {
            //************************************** */
            $html = view('calificaciones.treintaicinco', [
                'solicitud'=>$request,
                ])->render();
            $dompdf = new Dompdf();
            $dompdf->loadHtml($html);
            $dompdf->set_option('isRemoteEnabled','true');
            $dompdf->setPaper([0, 0, 816, 1247], 'portrait');
            $dompdf->render();
            return $dompdf->stream("plantilla.pdf", ['Attachment' => 0]);
            //************************************** */
                    }else{
                        if ($cantidad == 30) {
            //************************************** */
            $html = view('calificaciones.treinta', [
                'solicitud'=>$request,
                ])->render();
            $dompdf = new Dompdf();
            $dompdf->loadHtml($html);
            $dompdf->set_option('isRemoteEnabled','true');
            $dompdf->setPaper([0, 0, 816, 1247], 'portrait');
            $dompdf->render();
            return $dompdf->stream("plantilla.pdf", ['Attachment' => 0]);
            //************************************** */
                        }
                    }
                }
            }
        }



        


        

    }
}
