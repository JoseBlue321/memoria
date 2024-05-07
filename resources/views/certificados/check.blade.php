<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.cabeza')


    <div class="container">
        <div class="row align-items-center justify-content-center">
            @foreach ($validaciones as $validacion)
            <div class="col-md-10">

                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            <strong><h4 class="card-title"> {{$validacion->nombre}} {{$validacion->paterno}} {{$validacion->materno}} - {{$validacion->carnet}}</h4></strong> 
                            Su Certifficado es VALIDO que se otorgo en el siguiente evento
                            
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Evento</th>
                                        <th>Detalle</th>
                                        <th>Fecha</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$validacion->codigo}}</td>
                                        <td>{{$validacion->evento}}</td>
                                        <td>{{$validacion->detalle}}</td>
                                        <td>{{$validacion->fecha}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
                <br>
                <p class="card-text">
                    <a class="btn btn-danger" type="button" href="{{ route('validacion.evento') }}" role="button">Salir</a>
                </p>
            </div>
            @endforeach
        </div>
    </div>





    @include('partials.js')
</body>
</html>