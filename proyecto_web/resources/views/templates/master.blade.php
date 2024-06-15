
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administración de usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link rel="stylesheet" href="{{asset('css/custom.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/palito.css')}}">
</head>
  <body>
        <nav class="navbar navbar-expand-lg fixed-top">
          <div class="container-fluid">
              <a class="navbar-brand me-auto" href="#">Icono</a>
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                  aria-labelledby="offcanvasNavbarLabel">
                  <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                      <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                          <li class="nav-item mx-lg-2">
                              <a class="nav-link active" aria-current="page" href="#">Home</a>
                          </li>
                          <li class="nav-item mx-lg-2">
                              <a class="nav-link" href="#">Rentar un auto</a>
                          </li>
                          <li class="nav-item mx-lg-2">
                              <a class="nav-link" href="#">Tarifas y vehiculos</a>
                          </li>
                          <li class="nav-item mx-lg-2">
                              <a class="nav-link" href="#">Tipos de vehiculos</a>
                          </li>
                      </ul>
                  </div>
              </div>
              <a href="#" class="login-button  border-r-50 ">Cerrar sesion</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                  aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
          </div>
      </nav>
        <!-- fin navbar -->
      <div class="container-fluid mt-5">
        <div class="row mt-1">

        @yield('contenido-principal')

        </div>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>





