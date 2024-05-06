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
                                        <h4 class="card-title text-center">Libros</h4>
                                        <p class="card-text"></p>
                                        <div class="container">

                                            <form action="{{route('libros.store')}}" enctype="multipart/form-data" method="post">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                            
                                                <p class="card-text"><b>Nota:</b> Los campos con <strong style="color: red">*</strong> son obligatorios</p>

                                              <div class="card border-success mb-3" >
                                                <div class="card-header"><b>Información del Libro</b></div>
                                                <div class="card-body">
                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                          <label for="">Titulo del Libro <strong style="color: red">*</strong></label>
                                                          <input type="text" name="titulo" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                                          <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                          <label for="">Editorial <strong style="color: red">*</strong></label>
                                                          <input type="text" name="editorial" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                                          <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Autores que colaboraron en la elaboración del libro</label>
                                                          <textarea class="form-control" name="autores" id="" rows="3" placeholder="- Apellidos, Nombres, Instancio o unidad a la que pertenece"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                
                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-3">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Fecha de publicación</label>
                                                          <input type="date" name="fecha_publicacion" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                                          <small id="helpId" class="text-muted">Si corresponde (No obligatorio)</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Enlace del libro</label>
                                                          <input type="text" name="enlace_libro" id="" class="form-control" placeholder="url..." aria-describedby="helpId">
                                                          <small id="helpId" class="text-muted">Si corresponde (No obligatorio)</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">ISBN</label>
                                                          <input type="number" name="isbn" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                                          <small id="helpId" class="text-muted">Si corresponde (No obligatorio)</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                      <br>
                                                      <div class="form-group">
                                                        <label for="">Depósito Legal</label>
                                                        <input type="number" name="deposito_legal" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                                        <small id="helpId" class="text-muted">Si corresponde (No obligatorio)</small>
                                                      </div>
                                                  </div>
                                                </div>
                
                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="mb-3">
                                                            <label for="formFile" class="form-label">Archivo del libro en formato .pdf</label>
                                                            <input class="form-control" type="file" name="archivo_libro" id="formFile">
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
  
  