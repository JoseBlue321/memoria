<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.cabeza')
    @include('partials.nav')

    <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title text-center">Calificaciones</h4>
                <p class="card-text"></p>
                <form action="{{route('show.persona')}}" method="post">
                  @csrf
                  <div class="form-group">
                    <label for="">Carnet:</label>
                    <input type="text" name="carnet" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                    <small id="helpId" class="text-muted">Ingrese su número de carnet para verificar</small>
                  </div>
                  <br>
                  <button type="submit" class="btn btn-primary" style="width: 380px">Verificar Calificacion</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>




    @include('partials.js')
</body>
</html>