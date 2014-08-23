<?php

use Combos\Repositories\DeptosJudicialesRepo;
use Combos\Repositories\EtapasRepo;
use Combos\Repositories\FuerosRepo;
use Combos\Repositories\JuzgadosRepo;


 class CombosController extends \BaseController {

    protected $deptosJudicialesRepo,$etapasRepo,$fuerosRepo,$juzgadosRepo;

    public function __construct(DeptosJudicialesRepo $deptosJudicialesRepo, EtapasRepo $etapasRepo, FuerosRepo $fuerosRepo, JuzgadosRepo $juzgadosRepo){

        $this->deptosJudicialesRepo = $deptosJudicialesRepo;
        $this->etapasRepo           = $etapasRepo;
        $this->fuerosRepo           = $fuerosRepo;
        $this->juzgadosRepo         = $juzgadosRepo;


    }



	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

    public function DeptoJudicialCombo(){

        return $this->deptosJudicialesRepo->getCombos();

    }

    public function EtapasCombos(){

        return $this->etapasRepo->getCombos();
    }

    public function FuerosCombos(){

        return $this->fuerosRepo->getCombos();
    }

    public function JuzgadosCombos(){

        return $this->juzgadosRepo->getCombos();
    }

	public function index()
	{

        $deptosJudiciales = $this->DeptoJudicialCombo();
        $fueros           = $this->FuerosCombos();
        $juzgados         = $this->JuzgadosCombos();
        $etapas           = $this->EtapasCombos();

        $combos = compact("deptosJudiciales","fueros","juzgados","etapas");

        return Response::json($combos);




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


}
