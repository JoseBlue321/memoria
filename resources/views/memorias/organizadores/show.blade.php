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
                                      <h5 class="card-title">Titulo: {{$organizador->titulo}}</h5>
                                      <p class="card-text">
                                        <b>Código: </b>{{$organizador->id}} <br>
                                        <b>Organizadores: </b>{{$organizador->organizadores}} <br>
                                        <b>HCF: </b>{{$organizador->hcf}} <br>
                                        <b>Carrera/Departamento/Instituto: </b>{{$organizador->carrera}} <br>
                                        <b>Lugar del evento: </b>{{$organizador->lugar}} <br>
                                        <b>Tipo de evento: </b>{{$organizador->tipo}} <br>
                                        <b>Fecha de Inicio: </b>{{$organizador->fecha_inicio}} <br>
                                        <b>Fecha de Finalización: </b>{{$organizador->fecha_finalizacion}} <br>
                                        <b>Resumen: </b>{{$organizador->resumen}} <br>
                                        <b>Número de participantes: </b>{{$organizador->numero_participantes}} <br>
                                        <b>Fecha de Registro: </b>{{$organizador->created_at}}
                                      </p>
                                      <a href="{{route('organizadores.index')}}" class="btn btn-danger">Salir</a>
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
  