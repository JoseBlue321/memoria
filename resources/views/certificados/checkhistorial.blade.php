<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.cabeza')
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <h4 class="text-center">CERTIFICADOS DISPONIBLES</h4>
            @foreach ($participantes as $participante)
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title"> {{$participante->nombre}} {{$participante->paterno}} {{$participante->materno}} - {{$participante->carnet}}</h6>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Evento</th>
                                        <th>Detalle</th>
                                        <th>Fecha</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$participante->evento}}</td>
                                        <td>{{$participante->detalle}}</td>
                                        <td>{{$participante->fecha}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
            <p class="card-text">
                <br>
                <a class="btn btn-danger" type="button" href="{{ route('historial.evento') }}" role="button">Salir</a>
            </p>

        </div>
    </div>











    @include('partials.js')
</body>
</html>