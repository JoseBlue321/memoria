<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.cabeza')

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 text-center">
                <h5>HOJA DE RESPUESTA</h5>
                
                <embed src="{{ url("notas/$evaluacion->parcial_id/$evaluacion->imagen") }}" type="application/pdf" width="100%" height="600px" />
            </div>
            <div class="col-md-6 text-center">
                <h5>PATRON DE RESPUESTA</h5>
                <embed src="{{ url("notas/$evaluacion->parcial_id/$evaluacion->parcial_id.pdf") }}" type="application/pdf" width="100%" height="600px" />
            </div>
        </div>
    </div>

    @include('partials.js')
</body>
</html>