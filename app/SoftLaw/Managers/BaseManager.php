<?php


namespace SoftLaw\Managers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Oficios\Entities\Archivos;
use Oficios\Observers\OficiosObserver;


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

   

    public function save(){
       if(!$this->isValid()){
            return false;
       }
        $this->entity->fill($this->data);
        $this->entity->save();
        return true;
    }
} 