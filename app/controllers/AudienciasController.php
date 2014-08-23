<?php

use SoftLaw\Managers\AudienciasManager;
use SoftLaw\Repositories\AudienciasRepo;



class AudienciasController extends \BaseController {

	protected $audienciasRepo;


	public function __construct(AudienciasRepo $audienciasRepo){



		$this->audienciasRepo = $audienciasRepo;
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$audiencias = $this->audienciasRepo->all();
        //$audiencias   = $this->audienciasRepo->getCampos(['fecha as start','Audiencias as title']);
        $audiencias   = $this->audienciasRepo->calendario();
		return Response::json($audiencias);
	}


    public function getAudienciasJuicio(){
        $idJuicio     = Input::get('id_juicio');
        $audiencias   = $this->audienciasRepo->where('id_juicio',$idJuicio);
        //return Response::json($tareas);
        return View::make('juicios.listados.audiencias',compact("audiencias"));



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
		
		$data = Input::all();

		$audiencia = $this->audienciasRepo->newAudiencia();

		$audienciaManager  = new AudienciasManager($audiencia,$data);

		if($audienciaManager->save()){

			$respuesta = ["response"=>"success","msg"=>"Audiencia Cargada Correctamente"];
			return Response::json($respuesta);

		}

		$respuesta = ["response"=>"fail","errors"=>$audienciaManager->getErrors()];

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
