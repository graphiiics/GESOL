@extends('layouts.masterPro')

@section('head')
	{{HTML::style('css/test.css');}}
	{{HTML::script('js/catalogox.js')}}
	<script src="http://code.jquery.com/jquery-1.11.1.js" type="text/javascript" text="text/javascript"></script>
	
@stop

@section('cabecera')

<div class="btn-group btn-group-justified" role="group" aria-label="...">
	  <div class="btn-group" role="group">
	    <a href="{{ URL::to('inicio') }}">
		    <button type="button" class="btn btn-default">Inicio</button>
	    </a>
	  </div>
	  <div class="btn-group" role="group">
	    <a href="{{ URL::to('verProyectos') }}">
		    <button type="button" class="btn btn-default">Proyectos</button>
	    </a>
	  </div>
	  <div class="btn-group" role="group">
	    <a href="{{ URL::to('nuevoEstudiante') }}">
		    <button type="button" class="btn btn-default">Registro</button>
	    </a>
	  </div>
	  <div class="btn-group" role="group">
	    <a href="{{ URL::to('login') }}">
		    <button type="button" class="btn btn-default">Login</button>
	    </a>
	  </div>
	</div>
@stop

@section('menu')
<div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span> Desarrollo Software</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                        	<table class="table">
                        	@foreach ($proyectosSoftware as $proyecto) 
								<tr>
                                    <td>
                                    <a class="enlace" id="{{$proyecto->id}}" href="datos/{{$proyecto->id}}">{{$proyecto->nombre}}</a>
									</td>
                                </tr>
							@endforeach      
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-folder-close">
                            </span> Hardware Libre</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                            @foreach ($proyectosHardware as $proyecto) 
                                <tr>
                                    <td>
                                    <a class="enlace" id="{{$proyecto->id}}" href="datos/{{$proyecto->id}}">{{$proyecto->nombre}}</a>
                                    </td>
                                </tr>
                            @endforeach      
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-folder-close">
                            </span> Linux y kernel</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                            @foreach ($proyectosLinux as $proyecto) 
                                <tr>
                                    <td>
                                    <a class="enlace" id="{{$proyecto->id}}" href="datos/{{$proyecto->id}}">{{$proyecto->nombre}}</a>
                                    </td>
                                </tr>
                            @endforeach      
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-folder-close">
                            </span> Aplicaciones Móviles</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                            @foreach ($proyectosMoviles as $proyecto) 
                                <tr>
                                    <td>
                                    <a class="enlace" id="{{$proyecto->id}}" href="datos/{{$proyecto->id}}">{{$proyecto->nombre}}</a>
                                    </td>
                                </tr>
                            @endforeach      
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><span class="glyphicon glyphicon-folder-close">
                            </span> Diseño gráfico y multimedia</a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                            @foreach ($proyectosDiseño as $proyecto) 
                                <tr>
                                    <td>
                                    <a class="enlace" id="{{$proyecto->id}}" href="datos/{{$proyecto->id}}">{{$proyecto->nombre}}</a>
                                    </td>
                                </tr>
                            @endforeach      
                            </table>
                        </div>
                    </div>
                </div>
            </div>    
@stop

@section('contenido')
	<div id="resultado">
        
    </div>
@stop

