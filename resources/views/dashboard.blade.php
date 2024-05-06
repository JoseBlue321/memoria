<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @include('partials.head')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   
                        <div class="container">
                            <div class="row justify-content-center align-items-center g-2">
                                <div class="col-md-3">
                                    <div class="card text-dark bg-light mb-3" style="height: 200px">
                                        <div class="card-body">
                                          <h5 class="card-title">Proyectos de:</h5>
                                          <p class="card-text">Investigación/Interacción Social/Extensión Universitaria</p>
                                        </div>
                                        <div class="card-footer bg-transparent border-light">
                                            <a name="" id="" class="btn btn-secondary" href="{{route('proyectos.index')}}" role="button">
                                                Ingresar
                                            </a>
                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card text-dark bg-light mb-3" style="height: 200px">
                                        <div class="card-body">
                                          <h5 class="card-title">Artículos</h5>
                                          <p class="card-text">Artículos Científicos</p>
                                        </div>
                                        <div class="card-footer bg-transparent border-light">
                                            <a name="" id="" class="btn btn-secondary" href="{{route('articulo.index')}}" role="button">
                                                Ingresar
                                            </a>
                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card text-dark bg-light mb-3" style="height: 200px">
                                        <div class="card-body">
                                          <h5 class="card-title">Libros</h5>
                                          <p class="card-text">Todo tipo de libros publicados</p>
                                        </div>
                                        <div class="card-footer bg-transparent border-light">
                                            <a name="" id="" class="btn btn-secondary" href="{{route('libros.index')}}" role="button">
                                                Ingresar
                                            </a>
                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card text-dark bg-light mb-3" style="height: 200px">
                                        <div class="card-body">
                                          <h5 class="card-title">Tesis</h5>
                                          <p class="card-text">Tesis realizadas en el Instituto por cursantes/por miembros del Instituto/Tuteladas en el Instituto</p>
                                        </div>
                                        <div class="card-footer bg-transparent border-light">
                                            <a name="" id="" class="btn btn-secondary" href="#" role="button">
                                                Ingresar
                                            </a>
                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card text-dark bg-light mb-3" style="height: 200px">
                                        <div class="card-body">
                                          <h5 class="card-title">Aportes</h5>
                                          <p class="card-text">En Congresos Científicos, Simposios, Conferencias, Jornadas, Eventos de Investigación por los Institutos</p>
                                        </div>
                                        <div class="card-footer bg-transparent border-light">
                                            <a name="" id="" class="btn btn-secondary" href="#" role="button">
                                                Ingresar
                                            </a>
                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card text-dark bg-light mb-3" style="height: 200px">
                                        <div class="card-body">
                                          <h5 class="card-title">Organizador(a)</h5>
                                          <p class="card-text">De Simposios, Conferencias, Jornadas, Eventos de Investigación por los Institutos</p>
                                        </div>
                                        <div class="card-footer bg-transparent border-light">
                                            <a name="" id="" class="btn btn-secondary" href="#" role="button">
                                                Ingresar
                                            </a>
                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card text-dark bg-light mb-3" style="height: 200px">
                                        <div class="card-body">
                                          <h5 class="card-title">Patentes</h5>
                                          <p class="card-text"></p>
                                        </div>
                                        <div class="card-footer bg-transparent border-light">
                                            <a name="" id="" class="btn btn-secondary" href="#" role="button">
                                                Ingresar
                                            </a>
                                        </div>
                                      </div>
                                </div>

                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.js')
</x-app-layout>
