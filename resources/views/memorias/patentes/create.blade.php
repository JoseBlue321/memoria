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
                                        <h4 class="card-title text-center">Patentes</h4>
                                        <p class="card-text"></p>
                                        <div class="container">
                                            <form action="{{route('patentes.store')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                                <p class="card-text"><b>Nota:</b> Los campos con <strong style="color: red">*</strong> son obligatorios</p>
                
                                              <div class="card border-success mb-3" >
                                                <div class="card-header"><b>Información del patente</b></div>
                                                <div class="card-body">
                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                          <label for="">Titulo del patente <strong style="color: red">*</strong></label>
                                                          <input type="text" name="titulo" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                                          <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                          <label for="">Número de la Patente <strong style="color: red">*</strong></label>
                                                          <input type="number" name="numero" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                                          <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Nombre de los inventores de la patente y filación de los mismos</label>
                                                          <textarea class="form-control" name="nombres" id="" rows="3" placeholder="- Apellidos, Nombres, Instancio o unidad a la que pertenece"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-6">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Fecha de solicitud</label>
                                                          <input type="date" name="fecha_solicitud" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                                        </div>  
                                                    </div>
                                                    <div class="col-md-6">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Fecha de concesion</label>
                                                          <input type="date" name="fecha_concesion" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                                        </div> 
                                                    </div>
                                                </div>
                
                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Titular de la patente</label>
                                                          <input type="text" name="titular" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                                          <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                </div>
                
                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Resumen breve</label>
                                                          <textarea class="form-control" name="resumen" id="" rows="3" placeholder="Describir la invención y sus caracteristicas más importantes"></textarea>
                                                          <small id="helpId" class="text-muted">Max: 100 palabras</small>
                                                        </div>
                                                    </div>
                                                </div>
                
                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Reinvindicaciones</label>
                                                          <textarea class="form-control" name="reinvindicaciones" id="" rows="3" placeholder="limites precisos de la protección otorgada por la patente"></textarea>
                                                          <small id="helpId" class="text-muted">Max: 100 palabras</small>
                                                        </div>
                                                    </div>
                                                </div>
                
                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-6">
                                                        <br>
                                                        <div class="form-group">
                                                            <label for="">Clasificación Internacional</label>
                                                            <input type="text" name="clasificacion" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <br>
                                                        <div class="form-group">
                                                            <label for="">Lugar donde se otorgó la patente</label>
                                                            <input type="text" name="lugar" id="" class="form-control" placeholder="" aria-describedby="helpId">
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
                                                  <a class="btn btn-danger" href="{{route('patentes.index')}}" role="button">Cancelar</a>
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