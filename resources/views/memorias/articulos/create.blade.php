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
                            <div class="row justify-content-center align-items-center g-2">
                                <div class="col-md-12">
                                  <!--here content-->
     
                                  <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Artículos científicos</h4>
                                        <p class="card-text"><b>Nota:</b> Los campos con <strong style="color: red">*</strong> son obligatorios</p>

                                        <div class="container">
                                            <form action="{{route('articulo.store')}}" enctype="multipart/form-data" method="post">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                
                                              <div class="card border-success mb-3" >
                                                <div class="card-header"><b>Información del Articulo Cientifico</b></div>
                                                <div class="card-body">
                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                          <label for="">Titulo del Articulo <strong style="color: red">*</strong></label>
                                                          <input type="text" name="titulo" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                                          <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                          <label for="">Nombre de la Revista <strong style="color: red">*</strong> </label>
                                                          <input type="text" name="nombre" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                                          <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row align-items-start justify-content-start">
                                                  <div class="col-md-12">
                                                    <br>
                                                      <div class="form-group">
                                                        <label for="">Autores que colaboraron en la elaboración del articulo</label>
                                                        <textarea class="form-control" name="autores" id="" rows="3" placeholder="- Apellidos, Nombres, Instancio o unidad a la que pertenece"></textarea>
                                                      </div>
                                                  </div>
                                              </div>

                                              <div class="row align-items-start justify-content-start">
                                                <div class="col-md-12">
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
                                                    <div class="col-md-4">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">DOI</label>
                                                          <input type="number" name="doi" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                                          <small id="helpId" class="text-muted">Si corresponde (No obligatorio)</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Enlace del articulo</label>
                                                          <input type="text" name="enlace" id="" class="form-control" placeholder="http://..." aria-describedby="helpId">
                                                          <small id="helpId" class="text-muted">Si corresponde (No obligatorio)</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Como citar el articulo (Vancouver)</label>
                                                          <input type="text" name="vancouver" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                                          <small id="helpId" class="text-muted">Si corresponde (No obligatorio)</small>
                                                        </div>
                                                    </div>
                                                </div>
                
                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="mb-3">
                                                            <label for="formFile" class="form-label">Archivo del articulo en formato .pdf</label>
                                                            <input class="form-control" type="file" name="articulo_pdf" id="formFile">
                                                            <small id="helpId" class="text-muted">Si lo tiene (No obligatorio) Max: 10 MB</small>
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
                                                  <a class="btn btn-danger" href="{{route('articulo.index')}}" role="button">Cancelar</a>
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
  
  