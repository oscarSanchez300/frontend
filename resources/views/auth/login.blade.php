<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet">
    <title>Imagen Dinamica</title>
</head>

<body>
    <div class="container">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="card shadow animate__animated animate__zoomIn">
                    <div class="card-body m-0 p-0">
                        <div class="row m-0 p-0 justify-content-center align-items-center">
                            <div class="col-md-5 m-0 p-0 text-center">
                                <img src="/img/logotipo-imagen-dinamica-sin-fondo.png" class="Logotipo-Imagen-Dinamica_Sin_fondo img-fluid animate__animated animate__bounce animate__delay-1s">
                                <p class="text-center Bienvenido m-0 p-0">¡Bienvenido!</p>
                            </div>
                            <div class="col-md-7 Rectngulo-3105">
                                <p class="Iniciar-Sesin  text-center mt-5 mb-0 p-0">
                                    Iniciar Sesión
                                </p>
                                <p class="Ingresa-tu-correo-y-contrasea text-center m-0 p-0">
                                    Ingresa tu correo y contraseña.
                                </p>
                                <form action="{{ route('login') }}" method="POST" id="formID" class="mt-2" style="margin-bottom: 50px;">
                                    @csrf
                                    <div class="row justify-content-center">
                                        <div class="col-md-6">
                                            <label for="email" class="form-label Correo m-0 p-0">Correo</label>
                                            <input type="email" name="email" id="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" class=" form-control form-control-sm rounded-pill" required>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center mt-2">
                                        <div class="col-md-6">
                                            <label for="password" class="form-label Contrasea m-0 p-0">Contraseña</label>
                                            <input type="password" name="password" id="password" class="form-control form-control-sm rounded-pill" required>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center mt-3">
                                        <div class="col-md-4">
                                            <div class="d-grid gap-2">
                                                <button type="submit" class="btn btn-outline-light btn-sm rounded-pill">Ingresar</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</html>
