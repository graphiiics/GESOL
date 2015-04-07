<?php 

//Controlador de tipo RESTFUL
class catalogoController extends BaseController{


	public function getCatalogo()
	{
		 $proyectosSoftware = Proyecto::where('tipoProyecto', '=', 'Desarrollo de software')->get();
		 
		 $proyectosLinux = Proyecto::where('tipoProyecto', '=', 'Linux y kernel')->get();

		 $proyectosMoviles = Proyecto::where('tipoProyecto', '=', 'Aplicaciones móviles')->get();

		 $proyectosHardware = Proyecto::where('tipoProyecto', '=', 'Hardware libre')->get();

		 $proyectosDiseño = Proyecto::where('tipoProyecto', '=', 'Diseño gráfico y multimedia')->get();

		return View::make('proyectos/verProyectos')->with(array('proyectosSoftware'=> $proyectosSoftware, 'proyectosLinux' => $proyectosLinux, 'proyectosMoviles' => $proyectosMoviles, 'proyectosHardware' => $proyectosHardware, 'proyectosDiseño' => $proyectosDiseño ));
		//return View::make('catalogo')->with(array('proyectosSoftware'=> $proyectosSoftware, 'proyectosLinux' => $proyectosLinux, 'proyectosMoviles' => $proyectosMoviles, 'proyectosHardware' => $proyectosHardware, 'proyectosDiseño' => $proyectosDiseño ));
	}

	public function getDatos($id)
	{
		$proyecto = Proyecto::find($id);

		echo ("<div class='panel panel-default'>");
		echo ("<div class='panel-body form-horizontal payment-form'>");
	
		echo ("<h2 class='text-center'>".$proyecto->nombre."</h2>");
		
		echo ("<hr/>");
		echo ("<h4><b>Dependencia:</b></h4><samp> ".$proyecto->dependencia."</samp>");

		echo ("<h4><b>Objetivo:</b></h4><p><samp> ".$proyecto->objetivo."</samp></p>");
		echo ("<h4><b>Descripción:</b></h4><p><samp> ".$proyecto->descripcion."</samp></p>");

		echo ("<h4><b>Duración:</b> </h4><samp>".$proyecto->duracion." semanas</samp>");
		echo ("<h4><b>Número de integrantes:</b></h4><samp> ".$proyecto->numeroIntegrantes." personas</samp> ");
		echo ("<h4><b>Perfiles requeridos:</b></h4><la>");
		foreach ($proyecto->perfiles as $perfil) {
			echo ("<li><samp>".$perfil->nombre."</samp></li>");
			
		}
		echo ("<h4><b>Actividades principales:</b></h4><la>");
		foreach ($proyecto->actividades as $actividad) {
			echo ("<li><samp>".$actividad->nombre."</samp></li>");
			
		}
		echo ("</la>");

		echo ("</div>");
		echo ("</div>");
		

		//return $resultado;

	}
}
 	

?>
