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
                                        <h4 class="card-title text-center">Tesis realizadas en el Instituto por cursantes/por miembros del Instituto/tuteladas en el Instituto</h4>
                                        
                                        
                                        <p class="card-text"></p>
                                        <div class="container">
                                            <form action="{{route('tesis.store')}}" enctype="multipart/form-data" method="post">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                            
                                                <p class="card-text"><b>Nota:</b> Los campos con <strong style="color: red">*</strong> son obligatorios</p>
                
                                              <div class="card border-success mb-3" >
                                                <div class="card-header"><b>Información de la Tesis</b></div>
                                                <div class="card-body">
                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                          <label for="">Titulo de la tesis <strong style="color: red">*</strong></label>
                                                          <input type="text" name="titulo" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                                          <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Autor(es)</label>
                                                          <textarea class="form-control" name="autores" id="" rows="3" placeholder="- Apellidos, Nombres, Instancio o unidad a la que pertenece"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="form-group">
                                                            <label for="">Tutor</label>
                                                            <input type="text" name="tutor" id="" class="form-control" placeholder="- Apellidos, Nombres, Instancio o unidad a la que pertenece" aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted"></small>
                                                          </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="form-group">
                                                            <label for="">Resumen</label>
                                                            <textarea class="form-control" name="resumen" id="" rows="3" placeholder=""></textarea>
                                                            <small id="helpId" class="text-muted">Max: 100 palabras</small>
                                                          </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Palabras clave</label>
                                                          <input type="text" name="palabras_clave" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                                          <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                </div>
                
                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-6">
                                                        <br>
                                                        <label for="exampleDataList" class="form-label">Título para optar a: </label>
                                                        <input class="form-control" name="titulo_optar" list="titulo" id="exampleDataList" placeholder="Escribe para buscar...">
                                                        <datalist id="titulo">
                                                          <option value="Licenciatura">
                                                          <option value="Maestria">
                                                          <option value="Doctorado">
                                                          <option value="Especialidad">
                                                        </datalist>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Fecha de defensa</label>
                                                          <input type="date" name="fecha_defensa" id="" class="form-control" placeholder="url..." aria-describedby="helpId">
                                                          <small id="helpId" class="text-muted">Si corresponde (No obligatorio)</small>
                                                        </div>
                                                    </div>
                                                </div>
                
                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="mb-3">
                                                            <label for="formFile" class="form-label">Archivo de la tesis en formato .pdf</label>
                                                            <input class="form-control" name="archivo_tesis" type="file" id="formFile">
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
  
  