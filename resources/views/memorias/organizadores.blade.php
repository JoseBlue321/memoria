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
                        <h4 class="card-title text-center">Organizadores de Simposios, Conferencias, Jornadas, Eventos de Investigación por los Institutos</h4>
                        <p class="card-text"></p>
                        <div class="container">
                            <form action="" method="post">
                              <div class="card border-info mb-3" >
                                <div class="card-header"><b>Información Personal</b></div>
                                <div class="card-body">
                                    <div class="row align-items-start justify-content-start">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="">Organizador(es) del evento</label>
                                              <textarea class="form-control" name="" id="" rows="3" placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>

                              <div class="card border-success mb-3" >
                                <div class="card-header"><b>Información de los organizadores</b></div>
                                <div class="card-body">
                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="">Titulo del evento</label>
                                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                          <small id="helpId" class="text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="">Nombre del evento</label>
                                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                          <small id="helpId" class="text-muted"></small>
                                        </div>
                                    </div>

   
                                </div>

                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-6">
                                        <br>
                                        <div class="form-group">
                                            <label for="">Lugar del evento</label>
                                            <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                            <small id="helpId" class="text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <div class="form-group">
                                          <label for="">Fecha del evento</label>
                                          <input type="date" name="" id="" class="form-control" placeholder="url..." aria-describedby="helpId">
                                          <small id="helpId" class="text-muted"></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-6">
                                        <br>
                                            <label for="exampleDataList" class="form-label">Tipo de evento</label>
                                            <input class="form-control" list="metodologias" id="exampleDataList" placeholder="">
                                            <datalist id="metodologias">
                                              <option value="Congresos">
                                              <option value="Simposios">
                                              <option value="Conferencias">
                                              <option value="Jornadas">
                                              <option value="Otros eventos cientificos">
                                            </datalist>
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                            <label for="exampleDataList" class="form-label">Tipo de participación</label>
                                            <input class="form-control" list="participacion" id="exampleDataList" placeholder="">
                                            <datalist id="participacion">
                                              <option value="Asistente">
                                              <option value="Ponente">
                                              <option value="Presentación de poster cientifico">
                                              <option value="Contribucion de mesa de trabajo">
                                            </datalist>
                                    </div>
                                </div>

                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-12">
                                        <br>
                                        <div class="form-group">
                                          <label for="">Resumen del evento</label>
                                          <textarea class="form-control" name="" id="" rows="3" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <div class="form-group">
                                            <label for="">Número de participantes</label>
                                            <input type="number" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                            <small id="helpId" class="text-muted"></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-12">
                                        <br>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Archivo del documento final en formato .pdf</label>
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