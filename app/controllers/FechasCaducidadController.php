<?php

use SoftLaw\Repositories\FechasCaducidadesRepo;

use SoftLaw\Managers\FechasCaducidadesManagers;

class FechasCaducidadController extends \BaseController {
    protected  $fechasCaducidadesRepo;
    function __construct(FechasCaducidadesRepo $fechasCaducidadesRepo)
    {
        $this->fechasCaducidadesRepo = $fechasCaducidadesRepo;
    }


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
	    $data = Input::all();
        $repo = $this->fechasCaducidadesRepo->newFecha();
        $manager = new FechasCaducidadesManagers($repo,$data);
        if($manager->save()){
            $respuesta = ["response"=>"success","msg"=>"Fecha de Caducidad Cargada Correctamtente"];
            return     Response::json($respuesta);
        }

        $respuesta = ["response"=>"faill","msg"=>"Fecha Algo Salio mal"];
        return     Response::json($respuesta);

	}

    public function getFechasCaducidad(){
        $idJuicio = Input::get('id_juicio');
        $fechas    = $this->fechasCaducidadesRepo->where('id_juicio',$idJuicio);
        return View::make('juicios.listados.fechas',compact("fechas"));
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
