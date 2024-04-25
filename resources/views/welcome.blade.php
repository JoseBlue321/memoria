<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.cabeza')
    <div class="container">
        <div class="row justify-content-start align-items-start g-2">
            <div class="col-md-6">
                <h3>MEMORIA DE INVESTIGACIÓN</h3>
                @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" >
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">
                        Ingresar
                    </a>
        
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-success">
                            Registrarse
                        </a>
                    @endif
                @endauth
                @endif
            </div>
        </div>
        
    </div>
    



   
    @include('partials.js')
</body>
</html>
