<!DOCTYPE html>
<html lang="en">
    @include('partials.head')

<body>
    @include('partials.cabeza')

    <div class="container">
      @foreach ($estudiantes as $estudiante)
        <div class="row justify-content-center align-items-center">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">{{$estudiante->paterno}} {{$estudiante->materno}} {{$estudiante->nombre}} - {{$estudiante->carnet}}</h4>
                    <table class="table table-hover">
                      <thead class="table-dark">
                        <tr>
                          <th>Carrera</th>
                          <th>Curso</th>
                          <th>Asignatura</th>
                          <th>Parcial</th>
                          <th>Fecha</th>
                          <th>Detalle</th>
                          <th>nota</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>{{$estudiante->asignaturas->cursos->carreras->carrera}}</td>
                          <td>{{$estudiante->asignaturas->cursos->anio}}</td>
                          <td>{{$estudiante->asignaturas->nombre}}</td>
                          <td>{{$estudiante->asignaturas->parcial}}</td>
                          <td>{{$estudiante->asignaturas->fecha}}</td>
                          <td>{{$estudiante->asignaturas->detalle}}</td>
                          <td>{{$estudiante->nota}}</td>
                        </tr>
                      </tbody>
                    </table> 
                    @php
                        $id = $estudiante->asignaturas->id;
                        $patron = $estudiante->asignaturas->patron;
                    @endphp
                    <div class="row justify-content-center align-items-center g-2">
                      <div class="col-md-6">
                        <img src="{{ asset("notas/$id/$patron")}}" alt="patron" width="450px" height="600px" class="d-inline-block align-text-top">
                      </div>
                      <div class="col-md-6">
                        <img src="{{ asset("notas/$id/$estudiante->imagen")}}" alt="Hoja de respuesta" width="450px" height="600px" class="d-inline-block align-text-top">
                      </div>
                    </div>

                  
                    </div>
                  </div>
                </div>
                </div>
      @endforeach
      <a name="" id="" class="btn btn-danger" href="{{ route('calificaciones')}}" role="button">Salir</a> <br>
    </div>

    @include('partials.js')
</body>
</html>