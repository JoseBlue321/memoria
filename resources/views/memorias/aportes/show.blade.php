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
                                      <h5 class="card-title">Titulo del Apote: {{$aporte->titulo}}</h5>
                                      <p class="card-text">
                                        <b>Código: </b>{{$aporte->id}} <br>
                                        <b>Nombre del evento: </b>{{$aporte->nombre}} <br>
                                        <b>Autores: </b>{{$aporte->autores}} <br>
                                        <b>Lugar del evento: </b>{{$aporte->lugar_evento}} <br>
                                        <b>Tipo del evento: </b>{{$aporte->tipo_evento}} <br>
                                        <b>Tipo de participación: </b>{{$aporte->tipo_participacion}} <br>
                                        <b>Fecha de inicio del evento: </b>{{$aporte->fecha_inicio}} <br>
                                        <b>Fecha de finalización del evento: </b> {{$aporte->fecha_finalizacion}} <br>
                                        <b>Resumen: </b>{{$aporte->resumen}} <br>
                                        <b>Enlace del evento: </b>{{$aporte->enlace}} <br>
                                        <b>Fecha de registro: </b>{{$aporte->created_at}} <br>
                                      </p>
                                      <a href="{{route('aportes.index')}}" class="btn btn-danger">Salir</a>
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
  