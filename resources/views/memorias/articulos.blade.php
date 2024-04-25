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
                        <h4 class="card-title text-center">Artículos científicos, otro tipo de publicación</h4>
                        <p class="card-text"></p>
                        <div class="container">
                            <form action="" method="post">
                              <div class="card border-info mb-3" >
                                <div class="card-header"><b>Información Personal</b></div>
                                <div class="card-body">
                                    <div class="row align-items-start justify-content-start">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="">Autor(es)</label>
                                              <textarea class="form-control" name="" id="" rows="3" placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>

                              <div class="card border-success mb-3" >
                                <div class="card-header"><b>Información del articulo cientifico</b></div>
                                <div class="card-body">
                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="">Titulo del Articulo</label>
                                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                          <small id="helpId" class="text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="">Nombre de la Revista</label>
                                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                          <small id="helpId" class="text-muted"></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-4">
                                        <br>
                                        <div class="form-group">
                                          <label for="">DOI</label>
                                          <input type="number" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                          <small id="helpId" class="text-muted">Si corresponde (No obligatorio)</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <br>
                                        <div class="form-group">
                                          <label for="">Enlace del articulo</label>
                                          <input type="text" name="" id="" class="form-control" placeholder="http://..." aria-describedby="helpId">
                                          <small id="helpId" class="text-muted">Si corresponde (No obligatorio)</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <br>
                                        <div class="form-group">
                                          <label for="">Citas recibidas</label>
                                          <input type="number" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                          <small id="helpId" class="text-muted">Ingrese el numero de citas recibidas</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-start justify-content-start">
                                  <div class="col-md-12">
                                      <br>
                                      <div class="form-group">
                                        <label for="">Como citar el articulo (Vancuber)</label>
                                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                        <small id="helpId" class="text-muted"></small>
                                      </div>
                                  </div>
                              </div>

                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-12">
                                        <br>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Archivo del articulo en formato .pdf</label>
                                            <input class="form-control" type="file" id="formFile">
                                            <small id="helpId" class="text-muted">Si lo tiene (No obligatorio)</small>
                                        </div>
                                    </div>
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