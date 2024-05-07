<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plantilla</title>
    <style>
body {
    /* Establece la imagen de fondo */
    background-image: url('{{ asset('plantillas/Preguntas70.jpg')}}'); /* Ruta relativa a la imagen en la carpeta public */
    background-size: cover;
  }

      /* Estilos CSS */
      .texto-posicionado {
    position: absolute; /* Establece el posicionamiento absoluto */
    top: 12.5%; /* Posiciona el texto en el 50% del eje vertical */
    left: 55%; /* Posiciona el texto en el 50% del eje horizontal */
   
    /* Otros estilos opcionales */
    font-family: Arial, sans-serif;
    font-size: 16px;
  
      }
      </style>
</head>
<body>

     <!-- Contenido de tu página aquí -->
  <div class="texto-posicionado">
    <b>Asignatura:</b>  {{$solicitud->asignatura}}. <br>
    <b>Carrera:</b>  {{$solicitud->carrera}} <br>
    <b>Departamento:</b> {{$solicitud->departamento}} <br>
    <b>Cátedra:</b> {{$solicitud->catedra}} <br>
    <b>Año:</b> {{$solicitud->anio}} <br>
    <b>Examen:</b> {{$solicitud->tipo}} <br>
    <b>Fecha:</b> {{date("d M Y", strtotime($solicitud->fecha_examen))}}<br>
  </div>

</body>
</html>