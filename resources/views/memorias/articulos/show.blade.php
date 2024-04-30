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
                                      <h5 class="card-title">{{$articulo->titulo}}</h5>
                                      <p class="card-text">
                                        <b>Código: </b>{{$articulo->id}} <br>
                                        <b>Autores: </b>{{$articulo->autores}} <br>
                                        <b>Nombre de la Revista: </b>{{$articulo->nombre}} <br>
                                        <b>Doi: </b>{{$articulo->doi}} <br>
                                        <b>Enlace del Articulo: </b>{{$articulo->enlace}} <br>
                                        <b>Citad Recibidas: </b>{{$articulo->citas}} <br>
                                        <b>Como citar el articulo vancouver: </b>{{$articulo->vancouver}} <br>
                                        <b>Fecha de Registro: </b>{{$articulo->created_at}} <br>
                                      </p>
                                      <iframe src="{{ $articulo->archivo_articulo }}" width="100%" height="600px"></iframe>
                                      <a href="{{route('articulo.index')}}" class="btn btn-danger">Salir</a>
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
  