<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        font-size: 12px;
    }
    h1 {
        font-size: 20px;
        margin-bottom: 10px;
    }
    h2 {
        font-size: 16px;
        margin-bottom: 8px;
    }
    p {
        margin-bottom: 5px;
    }
    table {
        width: 100%;
        border-collapse: collapse;

    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            padding: 20px;
            background-color: white;
            color: dark;
            text-align: center;
        }
        h1 {
            margin: 0;
            font-size: 24px;
        }
        p {
            margin: 5px 0;
        }
        .cabeza {
            border-collapse: collapse; 
            border: none;

        }
</style>
<body>
    <header>
        <table class="cabeza">
            <tbody>
                <tr>
                    <td class="cabeza">
                        <img src="{{ asset('img/logo_medicina.png')}}" height="120px" width="120px" alt="" >
                    </td>
                    <td class="cabeza">
                        <h3>UNIVERSIDAD MAYOR DE SAN ANDRÉS</h3>
                        <h4>FACULTAD DE MEDICINA, ENFERMERÍA, NUTRICIÓN Y TECNOLOGÍA MÉDICA</h4>
                        <h4>VICEDECANATO</h4>
                        <h1>FICHA DE REGISTRO</h1>
                    </td>
                    <td class="cabeza">
                        <img src="data:image/png;base64,{{ base64_encode($qr) }}" alt="Código QR">
                    </td>
                </tr>
            </tbody>
        </table>


    </header>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{$evento->evento}}</h4>
            <p class="card-text"><b>Codigo evento: </b> {{$evento->codigo}}</p>
            <p class="card-text"><b>Fecha: </b> {{$evento->fecha}}</p>
            <p class="card-text"><b>Detalle: </b> {{$evento->detalle}}</p>
        </div>
    </div>
    <br>

    <table class="table">
        <thead>
            <tr>
                <th>Tipo</th>
                <th>Carnet</th>
                <th>Grado</th>
                <th>Nombre</th>
                <th>Paterno</th>
                <th>Materno</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$participante->tipo}}</td>
                <td>{{$participante->carnet}}</td>
                <td>{{$participante->grado}}</td>
                <td>{{$participante->nombre}}</td>
                <td>{{$participante->paterno}}</td>
                <td>{{$participante->materno}}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>