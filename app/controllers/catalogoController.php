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
	}

	public function getDatos($id)
	{
		$proyecto = Proyecto::find($id);

		$resultado ="<h1>".$proyecto->nombre."</h1>
					<p>".$proyecto->descripcion."</p>";
		return $resultado;

	}
}
 	

?>
