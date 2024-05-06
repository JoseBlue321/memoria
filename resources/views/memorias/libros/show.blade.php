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
                                      <h5 class="card-title">Titulo del libro: {{$libro->titulo}}</h5>
                                      <p class="card-text">
                                        <b>Código: </b>{{$libro->id}} <br>
                                        <b>Editorial: </b>{{$libro->editorial}} <br>
                                        <b>Autores: </b>{{$libro->autores}} <br>
                                        <b>Fecha de Publicación: </b>{{$libro->fecha_publicacion}} <br>
                                        <b>Enlace del libro: </b>{{$libro->enlace_libro}} <br>
                                        <b>ISBN: </b>{{$libro->isbn}} <br>
                                        <b>Deposito legal: </b>{{$libro->deposito_legal}} <br>
                                        <b>Fecha de Registro: </b>{{$libro->created_at}} <br>
                                      </p>
                                      <a href="{{route('libros.index')}}" class="btn btn-danger">Salir</a>
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
  