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
                                        <h4 class="card-title text-center">Organizadores de Simposios, Conferencias, Jornadas, Eventos de Investigación por los Institutos</h4>
                                        <p class="card-text"></p>
                                        <div class="container">
                                            <form action="{{route('organizadores.store')}}" enctype="multipart/form-data" method="post">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                                <p class="card-text"><b>Nota:</b> Los campos con <strong style="color: red">*</strong> son obligatorios</p>
                
                                              <div class="card border-success mb-3" >
                                                <div class="card-header"><b>Información de los organizadores</b></div>
                                                <div class="card-body">
                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                          <label for="">Titulo del evento <strong style="color: red">*</strong></label>
                                                          <input type="text" name="titulo" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                                          <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Organizador(es) del evento</label>
                                                          <textarea class="form-control" name="organizadores" id="" rows="3" placeholder="- Apellidos, Nombres, Instancio o unidad a la que pertenece"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-4">
                                                        <br>
                                                        <div class="form-group">
                                                            <label for="">Número de Resolución del HCF</label>
                                                            <input type="number" name="hcf" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted">Si corresponde (No obligatorio)</small>
                                                          </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <br>
                                                          <div class="form-group">
                                                            <label for="">Carrera / Departamento / Instituto</label>
                                                            <select class="form-control" name="carrera" id="">
                                                              <option>Carrera: Medicina</option>
                                                              <option>Carrera: Enfermeria</option>
                                                              <option>Carrera: Nutrición y Dietética</option>
                                                              <option>Carrera: Tecnología Médica</option>
                                                              <option>Programa de Fonoaudiología</option>
                                                              <option>Programa de Terapia Ocupacional</option>
                                                              <option>Departamento: Medicina y Salud Mental</option>
                                                              <option>Departamento: Ciencias Funcionales</option>
                                                              <option>Departamento: Ciencias Morfológicas</option>
                                                              <option>Departamento: Cirugia</option>
                                                              <option>Departamento: Salud Pública</option>
                                                              <option>Departamento: Patología</option>
                                                              <option>Departamento: Materno Infantil</option>
                                                              <option>Instituto: Genética</option>
                                                              <option>Instituto: IINSAD</option>
                                                              <option>Instituto: IBBA</option>
                                                            </select>
                                                          </div>
                                                    </div>
                                                </div>
                
                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-6">
                                                        <br>
                                                        <div class="form-group">
                                                            <label for="">Lugar del evento <strong style="color: red">*</strong></label>
                                                            <input type="text" name="lugar" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <br>
                                                            <label for="exampleDataList" class="form-label">Tipo de evento <strong style="color: red">*</strong></label>
                                                            <input class="form-control" name="tipo" list="metodologias" id="exampleDataList" placeholder="" required>
                                                            <datalist id="metodologias">
                                                              <option value="Congresos">
                                                              <option value="Simposios">
                                                              <option value="Conferencias">
                                                              <option value="Jornadas">
                                                              <option value="Otros eventos cientificos">
                                                            </datalist>
                                                    </div>
                                                </div>
                
                                                <div class="row align-items-start justify-content-start">
      
                                                    <div class="col-md-6">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Fecha de inicio del evento</label>
                                                          <input type="date" name="fecha_inicio" id="" class="form-control" placeholder="url..." aria-describedby="helpId">
                                                          <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Fecha de finalización del evento</label>
                                                          <input type="date" name="fecha_finalizacion" id="" class="form-control" placeholder="url..." aria-describedby="helpId">
                                                          <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                </div>
                
                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Resumen del evento</label>
                                                          <textarea class="form-control" name="resumen" id="" rows="3" placeholder=""></textarea>
                                                          <small id="helpId" class="text-muted">Max: 100 palabras</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="form-group">
                                                            <label for="">Número de participantes</label>
                                                            <input type="number" name="numero_participantes" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                </div>
                
                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="mb-3">
                                                            <label for="formFile" class="form-label">Archivo del documento final o del programa del evento en formato .pdf</label>
                                                            <input class="form-control" name="archivo_organizadores" type="file" id="formFile">
                                                            <small id="helpId" class="text-muted">Si corresponde (No obligatorio)</small>
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
                                                  <a class="btn btn-danger" href="{{route('organizadores.index')}}" role="button">Cancelar</a>
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