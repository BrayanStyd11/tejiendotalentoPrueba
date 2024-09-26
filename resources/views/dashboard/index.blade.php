<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/dashboard.css') }}">
    <title>Inicio</title>
</head>
<body>
    @include('layouts/header')
    @include('modals/employees/create')
    <div class="content-dashboard">
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col">
                    <h2 class="mr-3">Bienvenido!</h2>
                    <strong><h2>{{Auth::user()->name}}</h2></strong>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center margin-text-info">
            <div class="row">
                <div class="col">
                    <p class="mr-3">Añade los datos personales de tus empleados y despues agrega su cargo en tu empresa</p>
                </div>
                <div style="display: flex; flex-direction: column; align-items: center; margin-top:8%" data-bs-toggle="modal" data-bs-target="#addEmployee">
                    <div style="border-radius: 50%; background-color: #f0f0f0; padding: 20px; width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                        <div class="c-icon c-icon-lg text-primary" style="font-size: 36px;">
                            <i class="cil-user-plus"></i>
                        </div>
                    </div>
                    <p style="margin-top: 10px; font-size: 16px; color: #333;">Empieza aquí</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>