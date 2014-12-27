<?php 

//Controlador de tipo RESTFUL
class catalogoController extends BaseController{


	public function getCatalogo()
	{
		 $proyectosSoftware = Proyecto::where('tipoProyecto', '=', 'Desarrollo de software')->get();
		 
		 $proyectosLinux = Proyecto::where('tipoProyecto', '=', 'Linux y kernel')->get();

		 $proyectosMoviles = Proyecto::where('tipoProyecto', '=', 'Aplicaciones moviles')->get();

		 $proyectosHardware = Proyecto::where('tipoProyecto', '=', 'Hardware libre')->get();

		 $proyectosDiseño = Proyecto::where('tipoProyecto', '=', 'Diseño gráfico y multimedia')->get();

		return View::make('proyectos/verProyectos')->with(array('proyectosSoftware'=> $proyectosSoftware, 'proyectosLinux' => $proyectosLinux, 'proyectosMoviles' => $proyectosMoviles, 'proyectosHardware' => $proyectosHardware, 'proyectosDiseño' => $proyectosDiseño ));
		//return View::make('catalogo')->with(array('proyectosSoftware'=> $proyectosSoftware, 'proyectosLinux' => $proyectosLinux, 'proyectosMoviles' => $proyectosMoviles, 'proyectosHardware' => $proyectosHardware, 'proyectosDiseño' => $proyectosDiseño ));
	}

	public function getDatos($id)
	{
		$proyecto = Proyecto::find($id);

		echo ("<h2><b>Nombre:</b> ".$proyecto->nombre."</h2>");
		echo ("<h4><b>Dependencia:</b> ".$proyecto->dependencia."</h4>");
		echo ("<h4><b>Duración:</b> ".$proyecto->duracion." semanas</h4>");
		echo ("<h4><b>Número de integrantes:</b> ".$proyecto->numeroIntegrantes."</h4>");
		echo ("<h4><b>Perfiles requeridos:</b></h4><la>");
		foreach ($proyecto->perfiles as $perfil) {
			echo ("<li>".$perfil->nombre."</li>");
			
		}
		echo ("</la><p><b>Objetivo:</b><br> ".$proyecto->objetivo."</p>");
		echo ("<p><b>Descripción:</b><br> ".$proyecto->descripcion."</p>");
		

		//return $resultado;

	}
}
 	

?>
