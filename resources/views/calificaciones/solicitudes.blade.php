<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.cabeza')

    <div class="container">
        <div class="row align-items-start justify-content-start">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Formulario de solicitud de Calificación</h4>
                        <p class="card-text"></p>
                        <div class="container">
                            <form action="{{route('plantillas.persona')}}" method="post">
                              @csrf
                              <div class="card border-info mb-3" >
                                <div class="card-header"><b>Información del Docente</b></div>
                                <div class="card-body">
                                  <div class="row align-items-start justify-content-start">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                          <label for="">Nombre</label>
                                          <input type="text" name="nombre" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                          <small id="helpId" class="text-muted">Ingrese su nombre completo Ej. Dr. juan lopez lopez</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="">Celular</label>
                                        <input type="number" name="celular" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="">Correo</label>
                                        <input type="email" name="correo" id="" class="form-control" placeholder="correo@gmail.com" aria-describedby="" required>
                                        <small id="helpId" class="text-muted">Ingrese su correo electrónico</small>
                                      </div>
                                    </div>
                                </div>

                                </div>
                              </div>

                              <div class="card border-success mb-3" >
                                <div class="card-header"><b>Información del Examen</b></div>
                                <div class="card-body">

                                  <div class="row align-items-start justify-content-start">
                                    <div class="col-md-12">
                                      <div class="form-group">
                                        <label for="">Asignatura</label>
                                        <input type="text" name="asignatura" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                        <small id="helpId" class="text-muted">Ingrese el nombre de la asignatura</small>
                                      </div>
                                    </div>
                                </div>

                                  <div class="row align-items-start justify-content-start">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                          <label for="">Carrera</label>
                                          <select class="form-control" name="carrera" id="" required>
                                            <option>Medicina</option>
                                            <option>Enfermeria</option>
                                            <option>Nutrición y Dietética</option>
                                            <option>Tecnología Médica</option>
                                            <option>Programa de Fonoaudiología</option>
                                            <option>Programa de Terapia Ocupacional</option>
                                          </select>
                                        </div>
                                    </div>


                                    <div class="col-md-3">
                                      <div class="form-group">
                                       <label for="exampleDataList" class="form-label">Departamento</label>
                                       <input class="form-control" name="departamento" list="dep" id="exampleDataList" placeholder="Type to search...">
                                       <datalist id="dep">
                                        <option>Medicina y Salud Mental</option>
                                        <option>Ciencias Funcionales</option>
                                        <option>Ciencias Morfológicas</option>
                                        <option>Cirugia</option>
                                        <option>Salud Pública</option>
                                        <option>Patología</option>
                                        <option>Materno Infantil</option>
                                       </datalist>
                                       <small id="helpId" class="text-muted">Si corresponde.</small>
                                     </div>
                                   </div>

                                    <div class="col-md-3">
                                      <div class="form-group">
                                        <label for="exampleDataList" class="form-label">Cátedra</label>
                                        <input class="form-control" list="metodologias" name="catedra" id="exampleDataList" placeholder="Type to search...">
                                        <datalist id="metodologias">
                                          <option value="Anatomia">
                                          <option value="Histología">
                                          <option value="Embrología">
                                          <option value="Cátedra Bioquímica y Biología molecular">
                                          <option value="Cátedra de Fisiología – Biofísica">
                                          <option value="Cátedra de Anatomía Patológica">
                                          <option value="Cátedra de Microbiología">
                                            <option value="Cátedra de Parasitología">
                                            <option value="Cátedra de Fisiopatología">
                                            <option value="Cátedra de Bioquímica y Biología Molecular">
                                            <option value="Cátedra de Salud Pública I">
                                            <option value="Cátedra de Salud Pública II">
                                            <option value="Cátedra de Salud Pública III">
                                            <option value="Cátedra de Salud Pública IV">
                                            <option value="Cátedra de Salud Pública V">
                                            <option value="Cátedra de Medicina I">
                                            <option value="Cátedra de Medicina Legal">
                                            <option value="Cátedra de Medicina II">
                                            <option value="Cátedra de Psicología Médica">
                                            <option value="Cátedra de Cirugía I">
                                            <option value="Cátedra de Cirugía II">
                                            <option value="Cátedra de Cirugía III">
                                            <option value="Cátedra de Traumatología">
                                            <option value="Cátedra de Pediatría">
                                            <option value="Cátedra de Ginecología">
                                            <option value="Cátedra de Obstetricia">
                                        </datalist>
                                        <small id="helpId" class="text-muted">Si corresponde.</small>
                                      </div>
                                    </div>

                                    <div class="col-md-3">
                                      <div class="form-group">
                                        <label for="">Año</label>
                                        <select class="form-control" name="anio" id="" required>
                                          <option>Primer año</option>
                                          <option>Segundo año</option>
                                          <option>Tercer año</option>
                                          <option>Cuarto año</option>
                                          <option>Quinto año</option>
                                        </select>
                                      </div>
                                  </div>
                                </div>



                                  <div class="row align-items-start justify-content-start">
                                    <div class="col-md-4">
                                      <br>
                                      <div class="form-group">
                                       <label for="exampleDataList" class="form-label">Tipo exámen</label>
                                       <input class="form-control" name="tipo" list="examen" id="exampleDataList" placeholder="Type to search..." required>
                                       <datalist id="examen">
                                        <option value="Primer Parcial">
                                        <option value="Segundo Parcial">
                                        <option value="Tercer Parcial">
                                        <option value="Cuarto Parcial">
                                        <option value="Quinto Parcial">
                                        <option value="Sexto Parcial">
                                        <option value="Final">
                                        <option value="Final Teórico">
                                        <option value="Final Práctico">
                                        <option value="Primer Turno">
                                        <option value="Segundo Turno">
                                        <option value="Práctica">
                                       </datalist>
                                       <small id="helpId" class="text-muted"></small>
                                     </div>
                                   </div>
                                   <div class="col-md-4">
                                    <br>
                                    <div class="form-group">
                                      <label for="">Fecha del examen</label>
                                      <input type="date" name="fecha_examen" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                    </div>  
                                  </div>
                                  <div class="col-md-4">
                                    <br>
                                    <div class="form-group">
                                      <label for="">Número de preguntas</label>
                                      <select class="form-control" name="numero_preguntas" id="" required>
                                        <option>30</option>
                                        <option>35</option>
                                        <option>50</option>
                                        <option>70</option>
                                        <option>100</option>
                                      </select>
                                      <small id="helpId" class="text-muted">Si requiere otra cantidad de preguntas, coordinar con el encargado</small>
                                    </div>
                                    
                                  </div>
                                  </div>


                                </div>

                                </div>
                           

                                <div class="row align-items-start justify-content-start">
                                  <div class="col-md-12">
                                    <br>
                                    <button type="submit" class="btn btn-primary">
                                      Registrar
                                  </button>
                                  <button type="reset" class="btn btn-secondary">
                                      Limpiar
                                  </button>
                                  <a class="btn btn-danger" href="#" role="button">Cancelar</a>
                                </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
              </div>
        </div>
    </div>

    @include('partials.footer')
    @include('partials.js')
</body>
</html>