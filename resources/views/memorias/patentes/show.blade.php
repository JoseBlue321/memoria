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
                                      <h5 class="card-title">Titulo: {{$patente->titulo}}</h5>
                                      <p class="card-text">
                                        <b>Código: </b>{{$patente->id}} <br>
                                        <b>Número de la patente: </b>{{$patente->numero}} <br>
                                        <b>Fecha de solicitud: </b>{{$patente->fecha_solicitud}} <br>
                                        <b>Fecha de concesion: </b>{{$patente->fecha_concesion}} <br>
                                        <b>Titular de la patente: </b>{{$patente->titular}} <br>
                                        <b>Resumen breve: </b>{{$patente->resumen}} <br>
                                        <b>Reinvindicaciones: </b>{{$patente->reinvindicaciones}} <br>
                                        <b>Clasificación Internacional: </b>{{$patente->clasificacion}} <br>
                                        <b>Lugar donde se otorgo la patente: </b>{{$patente->lugar}} <br>
                                        <b>Fecha de Registro: </b>{{$patente->created_at}}
                                      </p>
                                      <a href="{{route('patentes.index')}}" class="btn btn-danger">Salir</a>
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
  