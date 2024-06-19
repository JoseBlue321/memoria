<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.cabeza')

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('verificacion.evento')}}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label for="" class="form-label">Carnet</label>
                                <input
                                    type="text"
                                    name="carnet"
                                    id=""
                                    class="form-control"
                                    placeholder=""
                                    aria-describedby="helpId"
                                    required
                                />
                                <small id="helpId" class="text-muted">Ingrese su carnet de identidad / DNI </small>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                Iniciar
                            </button>
                          <a class="btn btn-danger" href="{{route('certificados')}}" role="button">Cancelar</a>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
 
    @include('partials.js')
</body>
</html>