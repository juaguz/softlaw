<?php
/**
 * Created by PhpStorm.
 * User: juan
 * Date: 03/08/14
 * Time: 23:57
 */

namespace Combos\Managers;


class EtapasManager extends BaseManager{
    public function getRules()
    {
        $rules = ["descripcion"=>"unique:etapas"];
        return $rules;
    }


    public function getMessages()
    {
        $messages = ["descripcion.unique"=>"Esta etapa ya se encuentra registrada"];
        return $messages;
    }
}