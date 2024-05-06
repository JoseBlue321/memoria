<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        @include('partials.head')
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   
                    <div class="container">
                        <div class="row align-items-start justify-content-start">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Aportes (de participantes) en Congresos Científicos, Simposios, Conferencias, Jornadas, Eventos de Investigación por los Institutos</h4>
                                        <p class="card-text"></p>
                                        <div class="container">
                                            <form action="{{route('aportes.store')}}" enctype="multipart/form-data" method="post">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                                <p class="card-text"><b>Nota:</b> Los campos con <strong style="color: red">*</strong> son obligatorios</p>
                
                                              <div class="card border-success mb-3" >
                                                <div class="card-header"><b>Información de los aportes</b></div>
                                                <div class="card-body">
                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                          <label for="">Titulo del aporte <strong style="color: red">*</strong></label>
                                                          <input type="text" name="titulo" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                                          <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                          <label for="">Nombre del evento <strong style="color: red">*</strong></label>
                                                          <input type="text" name="nombre" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                                          <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Autor(es)</label>
                                                          <textarea class="form-control" name="autores" id="" rows="3" placeholder="- Apellidos, Nombres, Instancio o unidad a la que pertenece"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                
                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-4">
                                                        <br>
                                                        <div class="form-group">
                                                            <label for="">Lugar del evento <strong style="color: red">*</strong></label>
                                                            <input type="text" name="lugar" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <br>
                                                            <label for="exampleDataList" class="form-label">Tipo de evento <strong style="color: red">*</strong></label>
                                                            <input class="form-control" name="tipo_evento" list="metodologias" id="exampleDataList" placeholder="" required>
                                                            <datalist id="metodologias">
                                                              <option value="Congresos">
                                                              <option value="Simposios">
                                                              <option value="Conferencias">
                                                              <option value="Jornadas">
                                                              <option value="Otros eventos cientificos">
                                                            </datalist>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <br>
                                                            <label for="exampleDataList" class="form-label">Tipo de participación <strong style="color: red">*</strong></label>
                                                            <input class="form-control" name="tipo_participacion" list="participacion" id="exampleDataList" placeholder="" required>
                                                            <datalist id="participacion">
                                                              <option value="Ponente">
                                                              <option value="Presentación de poster cientifico">
                                                              <option value="Contribucion de mesa de trabajo">
                                                            </datalist>
                                                    </div>
 
                                                </div>
                
                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-6">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Fecha de inicio del evento <strong style="color: red">*</strong></label>
                                                          <input type="date" name="fecha_inicio" id="" class="form-control" placeholder="url..." aria-describedby="helpId" required>
                                                          <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Fecha de finalizacion del evento <strong style="color: red">*</strong></label>
                                                          <input type="date" name="fecha_finalizacion" id="" class="form-control" placeholder="url..." aria-describedby="helpId" required>
                                                          <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>

                                                </div>
                
                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Resumen</label>
                                                          <textarea class="form-control" name="resumen" id="" rows="3" placeholder=""></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="form-group">
                                                            <label for="">Enlace del evento</label>
                                                            <input type="text" name="enlace" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted">Si esta disponible (No obligatorio)</small>
                                                        </div>
                                                    </div>
                                                </div>
                
                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="mb-3">
                                                            <label for="formFile" class="form-label">Archivo del aporte en formato .pdf</label>
                                                            <input class="form-control" name="archivo_aportes" type="file" id="formFile">
                                                            <small id="helpId" class="text-muted">Adjuntar programa</small>
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


                </div>
            </div>
        </div>
    </div>
    @include('partials.datatable')
    @include('partials.js')
  </x-app-layout>
  