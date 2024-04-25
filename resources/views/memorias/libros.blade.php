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
                        <h4 class="card-title text-center">Libros</h4>
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
                                <div class="card-header"><b>Información del Libro</b></div>
                                <div class="card-body">
                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="">Titulo del Libro</label>
                                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                          <small id="helpId" class="text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="">Editorial</label>
                                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                          <small id="helpId" class="text-muted"></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-3">
                                        <br>
                                        <div class="form-group">
                                          <label for="">Fecha de publicación</label>
                                          <input type="date" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                          <small id="helpId" class="text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <br>
                                        <div class="form-group">
                                          <label for="">Enlace del libro</label>
                                          <input type="text" name="" id="" class="form-control" placeholder="url..." aria-describedby="helpId">
                                          <small id="helpId" class="text-muted">Si esta disponible</small>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <br>
                                        <div class="form-group">
                                          <label for="">ISBN</label>
                                          <input type="number" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                          <small id="helpId" class="text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                      <br>
                                      <div class="form-group">
                                        <label for="">Depósito Legal</label>
                                        <input type="number" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                        <small id="helpId" class="text-muted"></small>
                                      </div>
                                  </div>
                                </div>

                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-12">
                                        <br>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Archivo del libro en formato .pdf</label>
                                            <input class="form-control" type="file" id="formFile">
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