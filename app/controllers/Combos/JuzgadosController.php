<?php
use Combos\Repositories\JuzgadosRepo;
use Combos\Managers\JuzgadosManager;

class JuzgadosController extends \BaseController {
    protected $juzgadosRepo;
    function __construct(JuzgadosRepo $juzgadosRepo)
    {
       $this->juzgadosRepo = $juzgadosRepo;
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $combos =  $this->juzgadosRepo->all();
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
        $repo      = $this->juzgadosRepo->newJuzgado();
        $manager   = new JuzgadosManager($repo,$data);
        $respuestaOk = ["response"=>"success","msg"=>"Juzgado Creado Correctamente"];
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
