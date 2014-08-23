<?php
use SoftLaw\Managers\JuiciosManager;
use SoftLaw\Repositories\JuiciosRepo;

use Combos\Repositories\DeptosJudicialesRepo;
use Combos\Repositories\EtapasRepo;
use Combos\Repositories\FuerosRepo;
use Combos\Repositories\JuzgadosRepo;
use Combos\Repositories\TiposTareasRepo;
use Usuarios\Repositories\UsuariosRepo;



class JuiciosController extends \BaseController {

    protected $juiciosRepo,$usuariosRepo;
    protected $deptosJudicialesRepo,$etapasRepo,$fuerosRepo,$juzgadosRepo,$tiposTareasRepo;

    public function __construct(UsuariosRepo $usuariosRepo,TiposTareasRepo $tiposTareasRepo,JuiciosRepo $juiciosRepo,DeptosJudicialesRepo $deptosJudicialesRepo, EtapasRepo $etapasRepo, FuerosRepo $fuerosRepo, JuzgadosRepo $juzgadosRepo){

        $this->juiciosRepo = $juiciosRepo;
        $this->deptosJudicialesRepo = $deptosJudicialesRepo;
        $this->etapasRepo           = $etapasRepo;
        $this->fuerosRepo           = $fuerosRepo;
        $this->juzgadosRepo         = $juzgadosRepo;
        $this->tiposTareasRepo      = $tiposTareasRepo;
        $this->usuariosRepo         = $usuariosRepo;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $juicios = $this->juiciosRepo->order('id','DESC');

         return View::make('juicios.listados',compact('juicios'));

	}


    /**
     * Devuelve todos los combos
     *
     * @return Array
     */

    private function combos(){
        $deptosCombos   = $this->deptosJudicialesRepo->getCombos();
        $etapasCombos   = $this->etapasRepo->getCombos();
        $fuerosCombos   = $this->fuerosRepo->getCombos();
        $juzgadosCombos = $this->juzgadosRepo->getCombos();

        return compact("deptosCombos","etapasCombos","fuerosCombos","juzgadosCombos");

    }
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $form_data = array('route' => 'juicios.store', 'method' => 'POST','enctype' => 'multipart/form-data','id'=>'juiciosFrm');
        $combos    = $this->combos();
        return View::make('juicios.create',compact("form_data")+$combos);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $data = Input::all();
        $juicio = $this->juiciosRepo->newJuicio();
        $juicioManager   = new JuiciosManager($juicio,$data);
        if($juicioManager->save()){
            $respuesta  = ["response"=>"success","id_juicio"=>$juicio->id,'msg'=>'El juicio se cargo de Manera Correcta'];
            return Response::json($respuesta);

        }else{
            $respuesta = ["response"=>"faill","errores"=>$juicioManager->getErrors()];
            return Response::json($respuesta);
        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $juicio        = $this->juiciosRepo->find($id);
        $tareasCombo   = $this->tiposTareasRepo->getCombos();
        $usuariosCombo = $this->usuariosRepo->getUsuariosCombos();
		return View::make('juicios.juicio',compact("juicio","tareasCombo","usuariosCombo"));
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
