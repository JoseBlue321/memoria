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
                                        <h4 class="card-title text-center">Proyectos de: Investigación/Interacción Social/Extensión Universitaria</h4>
                                        <p class="card-text"></p>
                                        <div class="container">

                                            <form action="{{route('proyectos.store')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                
                                              <div class="card border-success mb-3" >
                                                <div class="card-header"><b>Información Proyecto</b></div>
                                                <div class="card-body">
                                                  <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                          <label for="">Titulo del Proyecto</label>
                                                          <input type="text" name="titulo" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                                          <small id="helpId" class="text-muted">Ingrese el titulo del Proyecto</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Descripción del Proyecto</label>
                                                          <textarea class="form-control" name="descripcion" id="" rows="3"></textarea>
                                                          <small id="helpId" class="text-muted">Max: 100 palabras</small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row align-items-start justify-content-start">
                                                  <div class="col-md-6">
                                                      <br>
                                                      <div class="form-group">
                                                        <label for="">Resolución HCF </label>
                                                        <input type="number" name="resolucion" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                                        <small id="helpId" class="text-muted">Si corresponde (No obligatorio)</small>
                                                      </div>
                                                  </div>

                                                  <div class="col-md-6">
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
                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Tipo de proyecto </label>
                                                          <select class="form-control" name="tipo" id="">
                                                            <option>Interacción Social</option>
                                                            <option>Investigación</option>
                                                            <option>Extensión Universitaria</option>
                                                          </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-start justify-content-start">
                                                  <div class="col-md-12">
                                                    <br>
                                                    <div class="form-group">
                                                      <label for="">Investigadores Principales y Colaboradores</label>
                                                      <textarea class="form-control" name="investigadores" id="" rows="3" placeholder="- Apellido, Nombre, Instancia o unidad que pertenece"></textarea>
                                                    </div>
                                                  </div>
                                              </div>
                
                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-6">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Fecha de Inicio - Proyecto</label>
                                                          <input type="date" name="fecha_inicio" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                                        </div>  
                                                    </div>
                                                    <div class="col-md-6">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Fecha de Finalización - Proyecto</label>
                                                          <input type="date" name="fecha_finalizacion" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-4">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Fuentes de financiamiento</label>
                                                          <input type="text" name="fuente" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                                          <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Palabras Clave</label>
                                                          <input type="text" name="palabra_clave" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                                          <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Colaboraciones y Alianzas</label>
                                                          <input type="text" name="colaboracion" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                                          <small id="helpId" class="text-muted">Si corresponde (No obligatorio)</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-start justify-content-start">
                                                    <div class="col-md-4">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Resultados y conclusiones</label>
                                                          <input type="text" name="resultado" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                                          <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="">Impacto y Aplicaciones</label>
                                                          <input type="text" name="impacto" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                                          <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <br>
                                                        <div class="form-group">
                                                            <label for="">Estado del Proyecto</label>
                                                            <select class="form-control" name="estado" id="">
                                                              <option>En ejecucion</option>
                                                              <option>Concluido</option>
                                                            </select>
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
                                                  <a class="btn btn-danger" href="{{route('proyectos.index')}}" role="button">Cancelar</a>
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
  
  