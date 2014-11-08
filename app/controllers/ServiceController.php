<?php

class ServiceController extends BaseController {

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

	public function getService($id)
	{
		$serv = Servicios::where('id','=',$id)->get();
		$servicio = ContServ::where('id_serv','=',$id)->get();
		return View::make('servicios.index')->with('servicios',$servicio)->with('serv',$serv[0]->image)->with('texto',$serv[0]->desc);
	}
	public function postService()
	{
		if (Request::ajax()) {
			$input = Input::all();
			$servicio = ContServ::where('id','=',$input['id'])->get();
			return Response::json(
				array('success'=>true,
						'titulo'=> $servicio[0]->nombre,
						'desc'=> $servicio[0]->desc));
		}else
		{
			return Response::json(array(
					'success' => false,
					'message' => 'ups hubo un error.'
				));
		}
	}

}