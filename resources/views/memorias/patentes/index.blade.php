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
                                  <h3>Patentes</h3>
                                  <div class="table-responsive">
                                      <table class="table table-hover">
                                          <thead class="table-primary">
                                              <th>Codigo</th>
                                              <th>Titulo del patente</th>
                                              <th>Número de la patente</th>
                                              <th>Nombre(s) de los inventores</th>
                                              <th>Titular de la patente</th>
                                              <th>Ver</th>
                                              <th>Eliminar</th>
                                          </thead>
                                          <tbody>
                                              @foreach ($patentes as $patente)
                                                  <tr>
                                                      <td>{{$patente->id}}</td>
                                                      <td>{{$patente->titulo}}</td>
                                                      <td>{{$patente->numero}}</td>
                                                      <td>{{$patente->nombres}}</td>
                                                      <td>{{$patente->titular}}</td>
                                                      <td><a class="btn btn-info" href="{{route('patentes.show',$patente->id)}}" role="button">Ver</a></td>
                                                      <td>
                                                          <form action="{{ route('patentes.destroy',$patente->id)}}" method="POST">
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
                                  <a class="btn btn-primary" href="{{route('patentes.create')}}" role="button">Registrar Nueva Patente</a>
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