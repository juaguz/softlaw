<?php


namespace SoftLaw\Repositories;


abstract class BaseRepo {

    protected $model;


    abstract public function getModel();

    function __construct(){

        $this->model = $this->getModel();

    }

    public function newLog($field,$value){

        $oficio =  $this->getModel();

        $oficio -> field       = $field;
        $oficio -> value       = $value;
        $oficio->id_usuario  = \Auth::user()->id;

        return $oficio;

    }

    public function load($argumentos){

        $this->model->load($argumentos);
    }

    

    public function find($id)
    {

        return $this->model->find($id);
    }
    public function order($campo,$orden)
    {

        return $this->model->orderBy($campo,$orden)->get();
    }

    public function scopeSelectFechas($query,$campo="fecha"){
        return $query->select("$campo as start");
    }

    public function all()
    {

        return $this->model->all();

    }


    public function getCampos($campos){
        return $this->model->query()->get($campos);
    }

    public function paginate($a = 10){

        return $this->model->paginate($a);
    }

    

    public function where($campo,$valor){

        return $this->model->where($campo,'=',$valor)->get();
    }

} 