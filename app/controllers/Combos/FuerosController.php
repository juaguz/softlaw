<?php
use Combos\Repositories\FuerosRepo;
use Combos\Managers\FuerosManager;

class FuerosController extends \BaseController {
    protected $fuerosRepo;
    function __construct(FuerosRepo $fuerosRepo)
    {
       $this->fuerosRepo = $fuerosRepo;
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $combos =  $this->fuerosRepo->all();
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
        $repo      = $this->fuerosRepo->newFuero();
        $manager   = new FuerosManager($repo,$data);
        $respuestaOk = ["response"=>"success","msg"=>"Fuero Creado Correctamente"];
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
