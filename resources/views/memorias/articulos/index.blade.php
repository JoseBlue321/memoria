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
                                  <h3>Articulos</h3>
                                  <div class="table-responsive">
                                      <table id="proyectos" class="table table-hover">
                                          <thead class="table-primary">
                                              <th>codigo</th>
                                              <th>titulo del articulo</th>
                                              <th>nombre de la revista</th>
                                              <th>archivo</th>
                                              <th>Ver</th>
                                              <th>Editar</th>
                                              <th>Eliminar</th>
                                          </thead>
                                          <tbody>
                                              @foreach ($articulos as $articulo)
                                                  <tr>
                                                      <td>{{$articulo->id}}</td>
                                                      <td>{{$articulo->titulo}}</td>
                                                      <td>{{$articulo->nombre}}</td>
                                                      <td>
                                                        @if ($articulo->archivo_articulo != null)
                                                        <i class="far fa-file-pdf" style="font-size: 24px; color: red;"></i> 
                                                        {{$articulo->archivo_articulo}}
                                                        @endif
                                                    </td>
                                                      <td><a class="btn btn-info" href="{{route('articulo.show',$articulo->id)}}" role="button">Ver</a></td>
                                                      <td><a class="btn btn-success" href="{{route('articulo.edit',$articulo->id)}}" role="button">Editar</a></td>
                                                      <td>
                                                          <form action="{{ route('articulo.destroy',$articulo->id)}}" method="POST">
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
                                  <a class="btn btn-primary" href="{{route('articulo.create')}}" role="button">Registrar Nuevo Articulo</a>
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
  
  