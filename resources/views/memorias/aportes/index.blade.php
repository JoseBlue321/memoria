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
                                  <h3>Aportes (de participantes) en Congresos Científicos, Simposios, Conferencias, Jornadas, Eventos de Investigación por los Institutos</h3>
                                  <div class="table-responsive">
                                      <table class="table table-hover">
                                          <thead class="table-primary">
                                              <th>Codigo</th>
                                              <th>Titulo del aporte</th>
                                              <th>Nombre del evento</th>
                                              <th>Tipo de evento</th>
                                              <th>Tipo de participación</th>
                                              <th>archivo</th>
                                              <th>Ver</th>
                                              <th>Eliminar</th>
                                          </thead>
                                          <tbody>
                                              @foreach ($aportes as $aporte)
                                                  <tr>
                                                      <td>{{$aporte->id}}</td>
                                                      <td>{{$aporte->titulo}}</td>
                                                      <td>{{$aporte->nombre}}</td>
                                                      <td>{{$aporte->tipo_evento}}</td>
                                                      <td>{{$aporte->tipo_participacion}}</td>
                                                      <td>
                                                        @if ($aporte->archivo_aportes != null)
                                                        <i class="far fa-file-pdf" style="font-size: 24px; color: red;"></i> 
                                                        {{$aporte->archivo_aportes}}
                                                        @endif
                                                    </td>
                                                      <td><a class="btn btn-info" href="{{route('aportes.show',$aporte->id)}}" role="button">Ver</a></td>
                                                      <td>
                                                          <form action="{{ route('aportes.destroy',$aporte->id)}}" method="POST">
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
                                  <a class="btn btn-primary" href="{{route('aportes.create')}}" role="button">Registrar Nuevo Aporte</a>
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