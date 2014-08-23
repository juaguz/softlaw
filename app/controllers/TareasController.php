<?php

use SoftLaw\Managers\TareasManager;
use SoftLaw\Repositories\TareasRepo;



class TareasController extends \BaseController {

	protected $tareaRepo;


	public function __construct(TareasRepo $tareaRepo){



		$this->tareaRepo = $tareaRepo;
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tareas = $this->tareaRepo->calendario();



		return  Response::json($tareas);
	}


    public function getTareasJuicio(){
        $idJuicio = Input::get('id_juicio');

        
        $tareas    = $this->tareaRepo->getTareas($idJuicio);
        
        //return Response::json($tareas);

        return View::make('juicios.listados.tareas',compact("tareas"));



    }


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//$tareas   = $this->tareaRepo->where('id_juicio',$idJuicio);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		$data = Input::all();

		$tarea = $this->tareaRepo->newTarea();

		$tareaManager  = new TareasManager($tarea,$data);

		if($tareaManager->save()){

			$respuesta = ["response"=>"success","msg"=>"Tarea Cargada Correctamente"];
			return Response::json($respuesta);

		}

		$respuesta = ["response"=>"fail","errors"=>$tareaManager->getErrors()];

		return Response::json($respuesta);
		

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


}
