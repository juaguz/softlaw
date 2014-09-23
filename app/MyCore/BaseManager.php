<?php


namespaces MyCore;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Oficios\Entities\Archivos;
use Oficios\Observers\OficiosObserver;
use Symfony\Component\HttpFoundation\Response;


abstract class BaseManager {

    protected $entity;
    protected $data;
    protected $errors;

    public function __construct($entity, $data){

        $this->entity = $entity;

        //$this->data   = array_only($data,array_keys($this->getRules()));
        $this->data   = $data;

    }

    abstract public function getRules();
    abstract public function getMessages();

    public function isValid(){
        $rules        = $this->getRules();
        $messages     = $this->getMessages();
        $validation   = \Validator::make($this->data,$rules,$messages);
        $isValid      = $validation->passes();
        $this->errors = $validation->messages();

        return $isValid;
    }

    public function getErrors(){

        return $this->errors;

    }



    public function save($msgCorrecto){
       if(!$this->isValid()){
           $errores  = $this->getErrors();
           $response = "error";

           return \Response::json(["response"=>$response,"errores"=>$errores]);
       }
        $this->entity->fill($this->data);
        $this->entity->save();
        return \Response::json($msgCorrecto);
    }
}
