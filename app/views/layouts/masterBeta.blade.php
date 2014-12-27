<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GESOL</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	@yield('head')	
</head>
<body>
	<div class="container">
		<div class="col-sm-12 col-md-12">
			<div id="cabecera">
				@yield('cabecera')
			</div>
		</div>
		
		
		<div class="col-sm-12 col-md-12">
			<div id="contenido">
				@yield('contenido')
			</div>
		</div>
		
		
	</div>
	
	
</body>
</html>