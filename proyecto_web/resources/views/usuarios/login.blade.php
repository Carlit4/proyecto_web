<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio de sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.min.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ URL::to('css/login.css') }}"> --}}
</head>

<body>
    {{-- CONTAINER PRINCIPAL --}}
    <div class="container d-flex justify-content-center align-items-center min-vh-100 ">
        {{-- CONTAINER DE LOGIN --}}
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            {{-- Espacio izq del container --}}
            <div class="col-md-6 rounded-4 d-none d-md-block d-flex justify-content-center align-items-center flex-column left-box" style="background:#009d71;">

                <div class="featured-image mb-1">
                    <img src="{{asset('images/car-937414_1280.png')}}" alt="" class="img-fluid" style="">
                </div>
                <h2 class="text-white text-center">Sistema de gestion de arriendo de vehiculos</h2>

            </div>

            {{-- Espacio der del container --}}
            <div class="col-md-6 right-box">
                <div class="row align-items-center">

                    <div class="header-text mb-4">
                        <h2>Inicio de Sesion</h2>
                    </div>

                    <form action="" method="POST">
                      @csrf
                      {{-- Input Correo Electronico --}}
                      <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Correo Electronico">
                      </div>

                      {{-- Input Contraseña --}}
                      <div class="input-group mb-1">
                          <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Contraseña">
                      </div>

                      {{-- Recordar --}}
                      <div class="input-group mb-5 d-flex justify-content-between">
                          <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="formCheck">
                              <label for="formCheck" class="form-check-label text-secondary"><small>Recordar Inicio</small></label>
                          </div>
                          <div class="forgot">
                              <small><a href="#">Olvidé mi contraseña</a></small>
                          </div>
                      </div>

                      {{-- Boton de iniciar sesion --}}
                      <div class="input-group mb-3">
                          <button class="btn btn-lg btn-primary w-100 fs-6">Iniciar Sesion</button>
                      </div>
                    </form>
                </div>

            </div>

        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>