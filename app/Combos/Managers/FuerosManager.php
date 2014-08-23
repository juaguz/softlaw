<?php
/**
 * Created by PhpStorm.
 * User: juan
 * Date: 03/08/14
 * Time: 23:58
 */

namespace Combos\Managers;


class FuerosManager extends BaseManager {
    public function getRules()
    {
        $rules  = ["descripcion"=>"unique:fueros"];
        return $rules;
    }

    public function getMessages()
    {
        // TODO: Implement getMessages() method.
        $message = ["descripcion.unique"=>"Este Fuero Ya se Encuentra Registrado"];
        return $message;
    }

} 