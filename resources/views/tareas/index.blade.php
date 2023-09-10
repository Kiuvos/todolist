@extends('home')
@section('content')
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <br><br>
            <H3>LISTA DE TAREAS</H3>
            <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
                Nuevo
              </button>
            <div class="table-responsive">
                <br>
                <table class="table ">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">DESCRIPCION</th>
                            <th scope="col">FECHA</th>
                            <th >REALIZADO</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tareas as $tareas)
                        <tr class="">
                            <td scope="row">{{$tareas->id}}</td>
                            <td scope="row">{{$tareas->descripcion}}</td>
                            <td scope="row">{{$tareas->fecha}}</td>
                            <td scope="row">{{$tareas->realizada}}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$tareas->id}}">
                                    Editar
                                  </button>
                                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$tareas->id}}">
                                    Eliminar
                                  </button>
                            </td>
                        </tr>
                        @include('tareas.info')
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('tareas.create')
        </div>
        <div class="colmd-2"></div>
    </div>
@endsection