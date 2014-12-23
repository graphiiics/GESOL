@extends('layouts.masterBeta')

@section('head')
	{{HTML::style('css/test.css');}}
@stop

@section('cabecera')
	<div class="btn-group btn-group-justified" role="group" aria-label="...">
	  <div class="btn-group" role="group">
	    <a href="{{ URL::to('inicio') }}">
		    <button type="button" class="btn btn-default">Inicio</button>
	    </a>
	  </div>
	  <div class="btn-group" role="group">
	    <a href="{{ URL::to('proyectos/ver') }}">
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

@section('contenido')

{{ Form::open(array('url' => 'estudiantes')) }}
	<div class="col-md-7 col-md-offset-3">
            <h4>Registro de Estudiante:</h4>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                {{--Aqui comienza el formulario--}}
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Nombre(s):</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nombres" name="nombres">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Apellido(s):</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="apellidos" name="apellidos">
                        </div>
                    </div>
					<div class="form-group">
                        <label for="amount" class="col-sm-3 control-label">Edad:</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="edad" name="edad">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date" class="col-sm-4 control-label">Fecha de nacimiento:</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">Sexo:</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="sexo" name="sexo">
                                <option>Masculino</option>
                                <option>Femenino</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Dirección:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="direccion" name="direccion">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Codigo postal:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="codigoPostal" name="codigoPostal">
                        </div>
                    </div> 
					<div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Telefono fijo:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="telefono" name="telefono">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Celular:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="celular" name="celular">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Correo:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                    </div>
					<div class="form-group">
                        <label for="status" class="col-sm-3 control-label">Estado</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="estado" name="estado">
                                <option value="Aguascalientes">Aguascalientes</option>
								<option value="Baja California">Baja California</option>
								<option value="Baja California Sur">Baja California Sur</option>
								<option value="Campeche">Campeche</option>
								<option value="Chiapas">Chiapas</option>
								<option value="Chihuahua">Chihuahua</option>
								<option value="Coahuila">Coahuila</option>
								<option value="Colima">Colima</option>
								<option value="Distrito Federal">Distrito Federal</option>
								<option value="Durango">Durango</option>
								<option value="Estado de México">Estado de México</option>
								<option value="Guanajuato">Guanajuato</option>
								<option value="Guerrero">Guerrero</option>
								<option value="Hidalgo">Hidalgo</option>
								<option value="Jalisco">Jalisco</option>
								<option value="Michoacán">Michoacán</option>
								<option value="Morelos">Morelos</option>
								<option value="Nayarit">Nayarit</option>
								<option value="Nuevo León">Nuevo León</option>
								<option value="Oaxaca">Oaxaca</option>
								<option value="Puebla">Puebla</option>
								<option value="Querétaro">Querétaro</option>
								<option value="Quintana Roo">Quintana Roo</option>
								<option value="San Luis Potosí">San Luis Potosí</option>
								<option value="Sinaloa">Sinaloa</option>
								<option value="Sonora">Sonora</option>
								<option value="Tabasco">Tabasco</option>
								<option value="Tamaulipas">Tamaulipas</option>
								<option value="Tlaxcala">Tlaxcala</option>
								<option value="Veracruz">Veracruz</option>
								<option value="Yucatán">Yucatán</option>
								<option value="Zacatecas">Zacatecas</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Municipio:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="municipio" name="municipio">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Universidad:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="universidad" name="universidad">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Carrera:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="carrera" name="carrera">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Matricula:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="matricula" name="matricula">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Promedio General:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="promedio" name="promedio">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">Modalidad:</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="modalidad" name="modalidad">
                                <option>Semestre</option>
                                <option>Cuatrimestre</option>
                                <option>Trimestre</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="amount" class="col-sm-3 control-label">Grado:</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="grado" name="grado">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Periodo:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="periodo" name="periodo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">Perfil:</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="perfil_id" name="perfil_id">
                                <option value="1">Programador</option>
                                <option value="2">Diseñador web</option>
                                <option value="3">Especialista en redes</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Contraseña:</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="contrasena" name="contrasena">
                        </div>
                    </div>
 					<div class="form-group">
 						<div class="col-sm-12 text-right">
                     {{ Form::submit('Guardar', array('class' => 'btn btn-primary')) }}

					{{ Form::close() }}  
                        </div>
                    </div>
                </div>
            </div>            
    </div>
@stop
