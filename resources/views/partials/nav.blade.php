
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('calificaciones')}}">Calificaciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('certificados')}}">Certificados</a>
          </li>

          <li class="nav-item">
            <div class="dropdown">
              <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Recopilación de datos - Memoria de Investigación
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li>
                  @if (Route::has('login'))
                  @auth
                  <a class="dropdown-item" href="{{ url('/dashboard') }}">Dashboard</a>
                  @else
                  <li><a class="dropdown-item" href="{{ route('login') }}">Ingresar</a></li>
                      @if (Route::has('register'))
                      <li><a class="dropdown-item" href="{{ route('register') }}">Registrarse</a></li>
                      @endif
                  @endauth
                  @endif
                </li>
              </ul>
            </div>
            
          </li>
        </ul>
      </div>
    </div>
  </nav>