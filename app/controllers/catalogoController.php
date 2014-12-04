<?php 

//Controlador de tipo RESTFUL
class catalogoController extends BaseController{


	public function getCatalogo2()
	{
		$proyectosSoftware = Proyecto::where('tipoProyecto', '=', 'software')->get();
		 
		 $proyectosLinux = Proyecto::where('tipoProyecto', '=', 'linux')->get();

		 $proyectosRedes = Proyecto::where('tipoProyecto', '=', 'redes')->get();

		 $proyectosHardware = Proyecto::where('tipoProyecto', '=', 'hardware')->get();

		return View::make('catalogo')->with(array('proyectosSoftware'=> $proyectosSoftware, 'proyectosLinux' => $proyectosLinux, 'proyectosRedes' => $proyectosRedes, 'proyectosHardware' => $proyectosHardware ));
	}
}
 	

?>
