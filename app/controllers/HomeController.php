<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		//$servicios = new Servicios;
		$servicios = Servicios::all();
		$imagenes_alt = array();
		foreach ($servicios as $key => $value) {
			$imagenes_alt[$key] = "images/".$value->alt;
		}
		/*foreach ($servicios as $clave => $valor) {
			$id_serv = $serv
			$image[$clave] = $valor->image;
			$imagenes_alt[$clave] = 'images/'.$valor->alt;
		}*/
		/*$url = "url('img/".$fila['alt']."');";
		$background = "background-image: ".$url." background-size: 100% 100%;".$margen;
		$style = 'style="'.$background.'"';
		$id = explode('.',$fila['image']);
		$nombre = $fila['nombre'];
		$id_serv = $fila['id'];*/
		return View::make('index')->with('servicios',$servicios)->with('alt',$imagenes_alt);//->width('servicios',$servicios);
	}

}
