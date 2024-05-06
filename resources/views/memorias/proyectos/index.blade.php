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
                                <h3>Proyectos</h3>
                                <div class="table-responsive">
                                    <table id="proyectos" class="table table-hover">
                                        <thead class="table-primary">
                                            <th>codigo</th>
                                            <th>titulo</th>
                                            <th>tipo</th>
                                            <th>Estado</th>
                                            <th>Ver</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($proyectos as $proyecto)
                                                <tr>
                                                    <td>{{$proyecto->id}}</td>
                                                    <td>{{$proyecto->titulo}}</td>
                                                    <td>{{$proyecto->tipo}}</td>
                                                    <td>{{$proyecto->estado}}</td>
                                                    <td><a class="btn btn-info" href="{{route('proyectos.show',$proyecto->id)}}" role="button">Ver</a></td>
                                                    <!--
                                                    <td><a class="btn btn-success" href="{{route('proyectos.edit',$proyecto->id)}}" role="button">Editar</a></td>
                                                    -->
                                                    <td>
                                                        <form action="{{ route('proyectos.destroy',$proyecto->id)}}" method="POST">
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
                                <a class="btn btn-primary" href="{{route('proyectos.create')}}" role="button">Registrar Nuevo Proyecto</a>
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
































