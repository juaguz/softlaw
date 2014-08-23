<?php
use Combos\Repositories\DeptosJudicialesRepo;

use Combos\Managers\DeptosJudicialesManager;

class DeptoJudicialController extends \BaseController {
    protected $deptosJudicialesRepo;
    function __construct(DeptosJudicialesRepo $deptosJudicialesRepo)
    {
       $this->deptosJudicialesRepo = $deptosJudicialesRepo;
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $combos =  $this->deptosJudicialesRepo->all();
        return $combos;
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
		$data      = Input::all();
        $repo      = $this->deptosJudicialesRepo->newDepto();
        $manager   = new DeptosJudicialesManager($repo,$data);
        $respuestaOk = ["response"=>"success","msg"=>"Depto Judicial Creado Correctamente"];

        return $manager->save($respuestaOk);



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
