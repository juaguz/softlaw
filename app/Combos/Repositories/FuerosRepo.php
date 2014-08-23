<?php
/**
 * Created by PhpStorm.
 * User: juan
 * Date: 04/08/14
 * Time: 00:04
 */

namespace Combos\Repositories;
use Combos\Entities\Fueros;

class FuerosRepo extends BaseRepo {

    public function getModel()
    {
        return new Fueros();
    }

    public function newFuero(){
        $fuero =  $this->getModel();
        return $fuero;

    }


} 