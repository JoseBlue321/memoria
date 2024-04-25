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
                                <div class="col-md-6">
                                  <!--here content-->
                                  <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">{{$proyecto->titulo}}</h5>
                                      <p class="card-text">
                                        <b>Código: </b>{{$proyecto->id}} <br>
                                        <b>Resolucion: </b>{{$proyecto->resolucion}} <br>
                                        <b>Carrera: </b>{{$proyecto->carrera}} <br>
                                        <b>Departamento: </b>{{$proyecto->departamento}} <br>
                                        <b>Instituto: </b>{{$proyecto->instituto}} <br>
                                        <b>Descripción: </b>{{$proyecto->descripcion}} <br>
                                        <b>Tipo: </b>{{$proyecto->tipo}} <br>
                                        <b>Investigadores: </b>{{$proyecto->investigadores}} <br>
                                        <b>Fecha de Inicio: </b>{{$proyecto->fecha_inicio}} <br>
                                        <b>Fecha de Finalización: </b>{{$proyecto->fecha_finalizacion}} <br>
                                        <b>Fuente: </b>{{$proyecto->fuente}} <br>
                                        <b>Palabra Clave: </b>{{$proyecto->palabra_clave}} <br>
                                        <b>Colaboración: </b>{{$proyecto->colaboracion}} <br>
                                        <b>Resultado: </b>{{$proyecto->resultado}} <br>
                                        <b>Impacto: </b>{{$proyecto->impacto}} <br>
                                        <b>Estado: </b>{{$proyecto->estado}} <br>
                                        <b>Fecha de Registro: </b>{{$proyecto->created_at}}
                                      </p>
                                      <a href="{{route('proyectos.index')}}" class="btn btn-danger">Salir</a>
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
  
  
  
  
  
  
  
  
  
  