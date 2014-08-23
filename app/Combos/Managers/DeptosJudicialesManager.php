<?php
/**
 * Created by PhpStorm.
 * User: juan
 * Date: 03/08/14
 * Time: 23:57
 */

namespace Combos\Managers;


class DeptosJudicialesManager extends BaseManager{
    public function getRules()
    {

        $rules = array("descripcion"=>"required|unique:dptos_judiciales");
        return $rules;
    }
    public function getMessages(){
        $messages = array("descripcion.unique"=>"El nombre de Depto Judicial ya se Encuentra Registrado",
                          "descripcion.required"=>"El nombre de Depto Judicial es obligatorio");
        return $messages;
    }
} 