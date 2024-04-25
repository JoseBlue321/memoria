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
                        <h4 class="card-title text-center">Tesis realizadas en el Instituto por cursantes/por miembros del Instituto/tuteladas en el Instituto</h4>
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
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Tutor</label>
                                                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                                <small id="helpId" class="text-muted"></small>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                              </div>

                              <div class="card border-success mb-3" >
                                <div class="card-header"><b>Información de la Tesis</b></div>
                                <div class="card-body">
                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                          <label for="">Titulo de la tesis</label>
                                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                          <small id="helpId" class="text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Resumen</label>
                                            <textarea class="form-control" name="" id="" rows="3" placeholder=""></textarea>
                                          </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                          <label for="">Palabras clave</label>
                                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                          <small id="helpId" class="text-muted"></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-6">
                                        <br>
                                        <label for="exampleDataList" class="form-label">Metodología</label>
                                        <input class="form-control" list="metodologias" id="exampleDataList" placeholder="Type to search...">
                                        <datalist id="metodologias">
                                          <option value="Método secuencial">
                                          <option value="Método del esquema o outline">
                                          <option value="Método por bloques">
                                          <option value="Método del borrador rápido seguido de revisiones">
                                          <option value="Método por iteraciones">
                                          <option value="Método basado en la investigación">
                                        </datalist>
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <div class="form-group">
                                          <label for="">Fecha de defensa</label>
                                          <input type="date" name="" id="" class="form-control" placeholder="url..." aria-describedby="helpId">
                                          <small id="helpId" class="text-muted"></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-12">
                                        <br>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Archivo de la tesis en formato .pdf</label>
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