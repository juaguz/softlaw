<?php
/**
 * Created by PhpStorm.
 * User: juan
 * Date: 24/08/14
 * Time: 12:53
 */
use SoftLaw\Repositories\MovimientosRepo;
use SoftLaw\Managers\MovimientosManager;

class MovimientosController extends BaseController{
    protected $movimientosRepo;

    function __construct(MovimientosRepo $movimientosRepo)
    {
        $this->movimientosRepo = $movimientosRepo;
    }

    public function store(){

        $data = Input::all();

        $movimientoRepo = $this->movimientosRepo->newMovimiento();

        $movimientosManager = new MovimientosManager($movimientoRepo,$data);

        if($movimientosManager->save()){
            $respuesta = ["response"=>"success","msg"=>"Movimiento Cargado Correctamente"];
            return  Response::json($respuesta);
        }

    }

    public function getMovimientosJuicio(){
        $idJuicio = Input::get('id_juicio');
        $movimientos    = $this->movimientosRepo->where('id_juicio',$idJuicio);
        //return Response::json($tareas);

        return View::make('juicios.listados.movimientos',compact("movimientos"));


    }

}