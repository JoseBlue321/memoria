<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.cabeza')
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-primary" role="alert">
                    <h1>
                        <div class="alert alert-primary text-center" role="alert">
                            FORMULARIO DE REGISTRO
                          </div>
                    </h1>
                  </div>
            </div>
            <div class="col-md-12">
                <h1>
                    {{$evento->evento}}
                </h1>    
                <p>
                    {{$evento->detalle}}
                </p>            
            </div>
        </div>
        <div class="row">
            <form action="{{route('store.participante')}}" method="post">
                @csrf
                <input type="hidden" name="evento_id" value="{{$evento->id}}">
                <div class="container">
                   <div class="row justify-content-center align-items-center g-2">
                       <div class="col-md-6">
                           <div class="form-group">
                               <label for="exampleDataList" class="form-label">Tipo</label>
                               <input class="form-control" name="tipo" list="tipo_participante" id="exampleDataList" placeholder="Tipo de participante..." required>
                               <datalist id="tipo_participante">
                                <option value="participante">
                                <option value="ponente">
                                <option value="expositor">
                                <option value="Organizador">
                                <option value="otro (escribir...)">
                               </datalist>
                               <small id="helpId" class="text-muted"></small>
                             </div>
                       </div>
                       <div class="col-md-6">
                           <br>
                           <div class="form-group">
                             <label for="">Carnet</label>
                             <input type="text" name="carnet" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                             <small id="helpId" class="text-muted">Ej. 9087013 (sin extención)</small>
                           </div>
                       </div>
                   </div>

                   <div class="row justify-content-center align-items-center g-2">
                       <div class="col-md-3">
                           <div class="form-group">
                               <label for="exampleDataList" class="form-label">Grado</label>
                               <input class="form-control" name="grado" list="tipo_grado" id="exampleDataList" placeholder="Tipo de participante...">
                               <datalist id="tipo_grado">
                                <option value="Dr.">
                                <option value="Dra.">
                                <option value="Lic.">
                                <option value="M.S.C.">
                                <option value="otro (escribir...)">
                               </datalist>
                               <small id="helpId" class="text-muted">Si corresponde</small>
                             </div>
                       </div>
                       <div class="col-md-3">
                           <div class="form-group">
                               <label for="">Paterno</label>
                               <input type="text" name="paterno" id="" class="form-control" placeholder="" aria-describedby="helpId">
                               <small id="helpId" class="text-muted"></small>
                           </div>
                       </div>
                       <div class="col-md-3">
                           <div class="form-group">
                               <label for="">Materno</label>
                               <input type="text" name="materno" id="" class="form-control" placeholder="" aria-describedby="helpId">
                               <small id="helpId" class="text-muted"></small>
                           </div>
                       </div>
                       <div class="col-md-3">
                           <div class="form-group">
                               <label for="">Nombre</label>
                               <input type="text" name="nombre" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                               <small id="helpId" class="text-muted"></small>
                           </div>
                       </div>
                   </div>

                   <div class="row justify-content-center align-items-center g-2">
                       <div class="col-md-6">
                           <div class="form-group">
                               <label for="">Correo</label>
                               <input type="text" name="correo" id="" class="form-control" placeholder="" aria-describedby="helpId">
                               <small id="helpId" class="text-muted">Si corresponde</small>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label for="">Telefono</label>
                               <input type="text" name="telefono" id="" class="form-control" placeholder="" aria-describedby="helpId">
                               <small id="helpId" class="text-muted">Si correspondo</small>
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
                     </div>
                     </div>
                </div>               
               </form>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br>
                <img src="{{asset("certificados/$evento->codigo.jpeg")}}" class="card-img-top" alt="img">
            </div>
        </div>
    </div>





    @include('partials.footer')
    @include('partials.js')
</body>
</html>