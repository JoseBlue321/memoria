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
                                  <h3>Organizadores de Simposios, Conferencias, Jornadas, Eventos de Investigación por los Institutos</h3>
                                  <div class="table-responsive">
                                      <table class="table table-hover">
                                          <thead class="table-primary">
                                              <th>Codigo</th>
                                              <th>Titulo del evento</th>
                                              <th>Organizadores</th>
                                              <th>Lugar del evento</th>
                                              <th>Tipo de evento</th>
                                              <th>archivo</th>
                                              <th>Ver</th>
                                              <th>Eliminar</th>
                                          </thead>
                                          <tbody>
                                              @foreach ($organizadores as $organizador)
                                                  <tr>
                                                      <td>{{$organizador->id}}</td>
                                                      <td>{{$organizador->titulo}}</td>
                                                      <td>{{$organizador->organizadores}}</td>
                                                      <td>{{$organizador->lugar}}</td>
                                                      <td>{{$organizador->tipo}}</td>
                                                      <td>
                                                        @if ($organizador->archivo_organizadores != null)
                                                        <i class="far fa-file-pdf" style="font-size: 24px; color: red;"></i> 
                                                        {{$organizador->archivo_organizadores}}
                                                        @endif
                                                    </td>
                                                      <td><a class="btn btn-info" href="{{route('organizadores.show',$organizador->id)}}" role="button">Ver</a></td>
                                                      <td>
                                                          <form action="{{ route('organizadores.destroy',$organizador->id)}}" method="POST">
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
                                  <a class="btn btn-primary" href="{{route('organizadores.create')}}" role="button">Registrar Nueva Organización</a>
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