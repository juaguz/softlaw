<?php

use Usuarios\Entities\User;

class UsuariosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	

	public function login()
	{

		

		
		$userdata = array('nombre_usuario' => Input::get('nombre_usuario'), 'password' => Input::get('contrasenia'));
		// Validamos los datos y además mandamos como un segundo parámetro la opción de recordar el usuario.
		if (Auth::attempt($userdata, Input::get('remember-me', 0))) {
			// De ser datos válidos nos mandara a la bienvenida
			$respuesta = array("respuesta"=>"success");
			
		}else{
		// En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
			$respuesta = array('respuesta' =>"failed");
		}

		return Response::json($respuesta);
    }


}
