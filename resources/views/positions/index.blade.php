<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/dashboard.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Cargo</title>
</head>
<body>
    @include('layouts/header')
    @include('modals/positions/create')
    <div class="container content-dashboard">
        <h2>Cargo</h2>

        <div class="row mt-3">
            <div class="col">
                <div>
                    <button class="btn btn-light" ><i class="cil-trash"></i> Borrar Selección</button>
                    <button class="btn btn-light" ><i class="cil-cloud-download"></i> Descargar Dartos</button>
                </div>
            </div>
            <div class="col">
                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addPosition" data-roles='{{$roles}}' data-areas='{{$areas}}' data-employees='{{$employees}}'><i class="cil-user-plus"></i> Agregar Usuario</button>
            </div>
        </div>

        <table class="table table-striped table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Identificación</th>
                    <th scope="col">Area</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Jefe</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($positions as $position)
                @include('modals/positions/update')
                @include('modals/positions/delete')
                <tr>
                    <th scope="row">{{$position->id}}</th>
                    <td>{{$position->name}} {{ $position->lastname }}</td>
                    <td>{{$position->document}}</td>
                    <td>
                        @foreach($position->positions as $area)
                            <span class="badge rounded-pill bg-primary">{{$area->area}}</span>
                        @endforeach
                    </td>
                    <td>
                        @foreach($position->positions as $area)
                            <a class="badge rounded-pill bg-primary" href="{{ route('positions.update',['id_employee'=>$area->pivot->id_employee, 'id_position'=>$area->pivot->id_position]) }}" >{{$area->name}}</button>
                        @endforeach
                    </td>
                    <td>{{$position->rol ? $position->rol->name : ''}}</td>               
                    <td>
                        @php
                            $previousBoss = null;
                        @endphp

                        @foreach($position->boss as $boss)

                            @if ($boss->name != $previousBoss)
                                <span class="badge rounded-pill bg-primary">{{$boss->name}}</span>
                                @php
                                    $previousBoss = $boss->name;
                                @endphp   
                            @endif

                        @endforeach
                    </td>
                    
                    <td>
                        <button class="btn btn-light btn-mx" data-bs-toggle="modal" data-bs-target="#updatePositon" data-position='{{$position}}' data-roles='{{$roles}}' data-areas='{{$areas}}' data-employees='{{$employees}}' ><i class="cil-pencil"></i></button>
                    </td>
                </tr>
            @endforeach
                
            </tbody>
        </table>
        {{ $positions->links('vendor/pagination/simple-bootstrap-4') }}
    </div>
</body>
</html>