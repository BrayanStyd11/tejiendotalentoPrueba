<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/dashboard.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Empleados</title>
</head>
<body>
    @include('layouts/header')
    @include('modals/employees/create')
    <div class="container content-dashboard">
        <h2>Empleados</h2>

        <div class="row mt-3">
            <div class="col">
                <div>
                    <button class="btn btn-light" ><i class="cil-trash"></i> Borrar Selección</button>
                    <button class="btn btn-light" ><i class="cil-cloud-download"></i> Descargar Dartos</button>
                </div>
            </div>
            <div class="col">
                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addEmployee"><i class="cil-user-plus"></i> Agregar Usuario</button>
            </div>
        </div>

        <table class="table table-striped table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Identificación</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($employees as $employee)
                @include('modals/employees/update')
                @include('modals/employees/delete')
                <tr>
                    <th scope="row">{{$employee->id}}</th>
                    <td>{{$employee->name}} {{ $employee->lastname }}</td>
                    <td>{{$employee->document}}</td>
                    <td>{{$employee->address}}</td>
                    <td>{{$employee->phone}}</td>
                    <td>{{$employee->city}}</td>
                    <td>{{$employee->department}}</td>
                    <td>
                        <button class="btn btn-light btn-mx" data-bs-toggle="modal" data-bs-target="#updateEmployee" data-employee='{{$employee}}' ><i class="cil-pencil"></i></button>
                        <button class="btn btn-light btn-mx" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal" data-employee='{{$employee}}'><i class="cil-trash"></i></button>
                    </td>
                </tr>
            @endforeach
                
            </tbody>
        </table>
        {{ $employees->links('vendor/pagination/simple-bootstrap-4') }}
    </div>
</body>
</html>