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
                                      <h5 class="card-title">Titulo de la tesis: {{$tesis->titulo}}</h5>
                                      <p class="card-text">
                                        <b>Código: </b>{{$tesis->id}} <br>
                                        <b>Autores: </b>{{$tesis->autores}} <br>
                                        <b>Tutor: </b>{{$tesis->tutor}} <br>
                                        <b>Resumen: </b>{{$tesis->resumen}} <br>
                                        <b>Palabras clave: </b>{{$tesis->palabras_clave}} <br>
                                        <b>Titulo para optar a: </b>{{$tesis->titulo_optar}} <br>
                                        <b>Fecha de defensa: </b>{{$tesis->fecha_defensa}} <br>
                                        <b>Fecha de Registro: </b>{{$tesis->created_at}} <br>
                                      </p>
                                      <a href="{{route('tesis.index')}}" class="btn btn-danger">Salir</a>
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
  