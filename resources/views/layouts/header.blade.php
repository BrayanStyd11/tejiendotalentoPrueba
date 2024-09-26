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

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://unpkg.com/@coreui/icons/css/all.min.css">
        <title>Inicio</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Psico <strong>Alianza</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    </ul>
                    <form class="d-flex">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{Auth::user()->name}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Perfil</a></li>
                                    <li><a class="dropdown-item" href="#">Configuración</a></li>
                                    <li><a class="dropdown-item" href="#">Soporte</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}">Salir</a></li>
                                </ul>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </nav>  

        <div class="sidebar sidebar-narrow-unfoldable border-end bg-primary" style="height: 100%; background-color: rgba(15, 101, 226, 0.8) !important;">
            <div class="sidebar-header border-bottom justify-content-center">
                <div class="sidebar-brand"><i class="cil-apps" style="color: white;"></i></div>
            </div>
            <ul class="sidebar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <i class="nav-icon cil-home" style="color: white;"></i> <p style="color: white;">Home</p>
                    </a>
                </li>
                <li class="nav-item dropdown nav-item nav-group show">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="nav-icon cil-list" style="color: white;"></i><p style="color: white;">Listas</p>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/employees">Empleados</a></li>
                        <li><a class="dropdown-item" href="/positions">Cargo</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </body>
</html>

<link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.1.2/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-lBISJVJ49zh34fnUuAaSAyuYzQ2ioGvhm4As4Z1JFde0kVpaC1FFWD3f9adpZrdD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.1.2/dist/js/coreui.bundle.min.js" integrity="sha384-yoEOGIfJg9mO8eOS9dgSYBXwb2hCCE+AMiJYavhAofzm8AoyVE241kjON695K1v5" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.1.2/dist/js/coreui.min.js" integrity="sha384-kiD3MgQ2eSqSjSfkoKS7/ipCvMvkfmpWHk3WRppeqnYxCVF0wQ+7gHzkXfJyvHbQ" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/@coreui/coreui-pro@5.4.2/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-+5b/xZ3OQhHfamps3tw08DlI5OFgTuUzPpaEZsw8TRItmaZIAE6GkbaFtJ7V1Qnp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui-pro@5.4.2/dist/js/coreui.bundle.min.js" integrity="sha384-+Ug5YaEFOtOtIaZG8WkBSUnbFWwZrEkpXgJT1icRSEYUg3uBSsWiA8HHIVUvGzKv" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui-pro@5.4.2/dist/js/coreui.min.js" integrity="sha384-/i4kDAP1NQqOIyekNyJZXVAPOfmdlRQz/KY6qQFSaQ4RYk5JkNBemHOKT7tyM5yT" crossorigin="anonymous"></script>