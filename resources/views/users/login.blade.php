<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
       
    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  </head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psico Alianza</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <img src="{{ asset('img/LogoInicio.jpg') }}" style="width: 100%; height: 633px;" class="img-fluid" alt="">
            </div>
            <div class="col-md-6 mt-5">
                <div class="mb-5 offset-md-5 mt-5">
                    <h3>Psico</h3>
                    <strong>
                        <h1>Alianza</h1>
                    </strong>
                </div>
                <form class="col-md-12" method='POST' action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Usuario</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="email" name="email" required>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                        <div class="col-sm-12 input-group">
                            <input type="password" class="form-control" id="password" name="password" required>
                            <span id="iconPassword" class="input-group-text">
                                <button class="btn btn-primary btn-sm" type="button" onclick="showPassword()">   
                                    <x-bi-eye style="width: 20px; height: 20px;"/> 
                                </button>
                            </span>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div> 
                
                    <div class="col-md-5 offset-md-5">
                        <label><input type="checkbox" id="cbox1" value="first_checkbox" /> Recordar Cuenta</label>
                    </div>
                    <div class="d-grid gap-2 mt-2">
                        <button class="btn btn-primary" type="submit">Iniciar Sesión</button>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="#" class="link-secondary">¿Olvidaste tu usuario?</a>
                        </div>
                        <div class="col offset-md-3">
                        <a href="#" class="link-secondary">¿Olvidaste tu contraseña?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<script>
    function showPassword(){
        var tipo = document.getElementById("password");
            if(tipo.type == "password"){
                tipo.type = "text";
            }else{
                tipo.type = "password";
            }

            var iconContainer = document.getElementById('iconPassword');
            // Cambia el icono según el tipo
            switch (tipo.type) {
                case 'text':
                    iconContainer.innerHTML = `
                        <button class="btn btn-primary btn-sm" type="button" onclick="showPassword()">   
                            <x-ionicon-eye-off style="width: 20px; height: 20px; fill: white !important"/>
                        </button>
                    `;
                    break;
                case 'password':
                    iconContainer.innerHTML = `
                        <button class="btn btn-primary btn-sm" type="button" onclick="showPassword()">   
                            <x-bi-eye style="width: 20px; height: 20px;"/> 
                        </button>
                    `;
                    break;
            }
        }
</script>