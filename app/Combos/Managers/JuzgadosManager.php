<?php
/**
 * Created by PhpStorm.
 * User: juan
 * Date: 03/08/14
 * Time: 23:58
 */

namespace Combos\Managers;


class JuzgadosManager extends BaseManager{
    public function getRules()
    {
        $rules = ["descripcion"=>"unique:juzgados"];
        return $rules;
    }

    public function getMessages()
    {
        $messages = ["descripcion.unique"=>"El Juzgado ya se encuentra Registrado"];
        return $messages;
    }
}