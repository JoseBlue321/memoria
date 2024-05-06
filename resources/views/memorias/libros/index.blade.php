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
                                  <h3>Libros</h3>
                                  <div class="table-responsive">
                                      <table class="table table-hover">
                                          <thead class="table-primary">
                                              <th>codigo</th>
                                              <th>titulo del libro</th>
                                              <th>editorial</th>
                                              <th>Autores</th>
                                              <th>archivo</th>
                                              <th>Ver</th>
                                              <th>Eliminar</th>
                                          </thead>
                                          <tbody>
                                              @foreach ($libros as $libro)
                                                  <tr>
                                                      <td>{{$libro->id}}</td>
                                                      <td>{{$libro->titulo}}</td>
                                                      <td>{{$libro->editorial}}</td>
                                                      <td>{{$libro->autores}}</td>
                                                      <td>
                                                        @if ($libro->archivo_libro != null)
                                                        <i class="far fa-file-pdf" style="font-size: 24px; color: red;"></i> 
                                                        {{$libro->archivo_libro}}
                                                        @endif
                                                    </td>
                                                      <td><a class="btn btn-info" href="{{route('libros.show',$libro->id)}}" role="button">Ver</a></td>
                                                      <td>
                                                          <form action="{{ route('libros.destroy',$libro->id)}}" method="POST">
                                                              @csrf
                                                              @method('DELETE')
                                                              <button type="submit" class="btn btn-danger">Eliminar</button>
                                                          </form>
                                                      </td>
                                                  </tr>
                                              @endforeach
                                          </tbody>
                                      </table>
                                  </div>
                                  <a class="btn btn-primary" href="{{route('libros.create')}}" role="button">Registrar Nuevo Libro</a>
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
  
  