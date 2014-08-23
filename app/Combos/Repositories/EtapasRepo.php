<?php
/**
 * Created by PhpStorm.
 * User: juan
 * Date: 04/08/14
 * Time: 00:04
 */

namespace Combos\Repositories;

use Combos\Entities\Etapas;


class EtapasRepo extends BaseRepo {
    public function getModel()
    {
        return new Etapas();
    }
    public function  newEtapa(){
        $etapa = $this->getModel();
        return $etapa;
    }

} 