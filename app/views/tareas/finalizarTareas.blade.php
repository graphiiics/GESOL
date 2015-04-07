@extends('layouts.masterProEstudiante')

@section('head')
    {{HTML::style('css/test.css');}}
@stop

@section('cabecera')
    
@stop

@section('menu')
    
@stop
@section('contenido')
       <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif


    <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="{{$porcentaje}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$porcentaje}}%;">
           {{$porcentaje}}%
        </div>
    </div>



    <label for="status" class="col-sm-3 control-label">Tareas en proceso:</label>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>Nombre de la tarea</td>
                <td>Duración</td>
                <td>Prorcentaje</td>
                <td class="col-sm-3">Acciones</td>
                
            </tr>
        </thead>
        <tbody>
        @foreach($tareas as $tarea)
            <tr>
                <td>{{ $tarea->nombre}}</td>
                <td>{{ $tarea->tiempo}} semanas</td>
                <td>{{ $tarea->porcentaje}}%</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>
                    <a class="btn btn-small btn-success" href="{{ URL::to('validarTarea/' . $tarea->id) }}">Finalizar</a>
                    <a class="btn btn-small btn-danger" href="{{ URL::to('eliminarTarea/' . $tarea->id) }}">Eliminar</a>
                </td>
            </tr>
        @endforeach
        
        </tbody>
    </table>

    <label for="status" class="col-sm-3 control-label">Tareas en revisión:</label>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>Nombre de la tarea</td>
                <td>Duración</td>
                <td>Prorcentaje</td>
                
                
            </tr>
        </thead>
        <tbody>
        @foreach($tareasPendientes as $tareaPendiente)
            <tr>
                <td>{{ $tareaPendiente->nombre}}</td>
                <td>{{ $tareaPendiente->tiempo}} semanas</td>
                <td>{{ $tareaPendiente->porcentaje}}%</td>

                <!-- we will also add show, edit, and delete buttons -->
               
            </tr>
        @endforeach
        
        </tbody>
    </table>

    <label for="status" class="col-sm-3 control-label">Tareas en Terminadas:</label>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>Nombre de la tarea</td>
                <td>Duración</td>
                <td>Prorcentaje</td>
                
                
            </tr>
        </thead>
        <tbody>
        @foreach($tareasTerminadas as $tareaTerminada)
            <tr>
                <td>{{ $tareaTerminada->nombre}}</td>
                <td>{{ $tareaTerminada->tiempo}} semanas</td>
                <td>{{ $tareaTerminada->porcentaje}}%</td>

                <!-- we will also add show, edit, and delete buttons -->
               
            </tr>
        @endforeach
        
        </tbody>
    </table>
@stop