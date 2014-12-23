<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GESOL</title>
	{{HTML::style('css/bootstrap-theme.min.css');}}
	{{HTML::style('css/bootstrap.min.css');}}
	{{HTML::script('js/bootstrap.min.js');}}
	{{HTML::script('js/jquery-1.11.0.min.js');}}
	@yield('head')	
</head>
<body>
	<div class="container">
		<div class="col-sm-12 col-md-12">
			<div id="cabecera">
				@yield('cabecera')
			</div>
		</div>
		
		<div class="col-sm-3 col-md-3">
			<div id="menu">
				@yield('menu')
			</div>
		</div>
		
		<div class="col-sm-9 col-md-9">
			<div id="contenido">
				@yield('contenido')
			</div>
		</div>
		
	</div>
	
	
</body>
</html>
