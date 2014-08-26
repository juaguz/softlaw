<?php
/**
 * Created by PhpStorm.
 * User: juan
 * Date: 25/08/14
 * Time: 20:51
 */

namespace SoftLaw\Repositories;


use SoftLaw\Entities\FechasCaducidadEntities;

class FechasCaducidadesRepo extends BaseRepo {
    public function getModel()
    {
        return new FechasCaducidadEntities();
    }

    public function newFecha(){

        return $this->getModel();
    }

} 