<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.cabeza')
    @include('partials.nav')

    <div class="container">
        <div class="row align-items-start justify-content-start">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Patentes</h4>
                        <p class="card-text"></p>
                        <div class="container">
                            <form action="" method="post">
                              <div class="card border-info mb-3" >
                                <div class="card-header"><b>Información Personal</b></div>
                                <div class="card-body">
                                    <div class="row align-items-start justify-content-start">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="">Nombre de los inventores de la patente</label>
                                              <textarea class="form-control" name="" id="" rows="3" placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>

                              <div class="card border-success mb-3" >
                                <div class="card-header"><b>Información del patente</b></div>
                                <div class="card-body">
                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="">Titulo del patente</label>
                                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                          <small id="helpId" class="text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="">Número de la Patente</label>
                                          <input type="number" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                          <small id="helpId" class="text-muted"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-6">
                                        <br>
                                        <div class="form-group">
                                          <label for="">Fecha de solicitud</label>
                                          <input type="date" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                        </div>  
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <div class="form-group">
                                          <label for="">Fecha de concesion</label>
                                          <input type="date" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                        </div> 
                                    </div>
                                </div>

                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-12">
                                        <br>
                                        <div class="form-group">
                                          <label for="">Titular de la patente</label>
                                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                          <small id="helpId" class="text-muted"></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-12">
                                        <br>
                                        <div class="form-group">
                                          <label for="">Resumen breve</label>
                                          <textarea class="form-control" name="" id="" rows="3" placeholder="Describir la invención y sus caracteristicas más importantes"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-12">
                                        <br>
                                        <div class="form-group">
                                          <label for="">Reinvindicaciones</label>
                                          <textarea class="form-control" name="" id="" rows="3" placeholder="limites precisos de la protección otorgada por la patente"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-6">
                                        <br>
                                        <div class="form-group">
                                            <label for="">Clasificación Internacional</label>
                                            <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                            <small id="helpId" class="text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <div class="form-group">
                                            <label for="">Lugar donde se otorgó la patente</label>
                                            <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                            <small id="helpId" class="text-muted"></small>
                                        </div>
                                    </div>
                                </div>
                                
                   
                                <div class="row align-items-start justify-content-start">
                                  <div class="col-md-12">
                                    <br>
                                    <button type="submit" class="btn btn-primary">
                                      Registrar
                                  </button>
                                  <button type="reset" class="btn btn-secondary">
                                      Limpiar
                                  </button>
                                  <a class="btn btn-danger" href="#" role="button">Cancelar</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
              </div>
        </div>
    </div>





    @include('partials.js')
</body>
</html>