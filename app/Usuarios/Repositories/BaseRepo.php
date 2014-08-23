<?php


namespace Usuarios\Repositories;


abstract class BaseRepo {

    protected $model;


    abstract public function getModel();

    function __construct(){

        $this->model = $this->getModel();

    }




    public function find($id)
    {

        return $this->model->find($id);
    }

    public function all()
    {

        return $this->model->all();

    }


    public function paginate($a = 10){

        return $this->model->paginate($a);
    }


    public function getCombos($descripcion="descripcion",$id="id"){

        return $this->model->all()->lists($descripcion,$id);

    }

    public function where($campo,$valor){

        return $this->model->where($campo,'=',$valor)->get();
    }

} 