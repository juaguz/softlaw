<?php
/**
 * Created by PhpStorm.
 * User: juan
 * Date: 04/08/14
 * Time: 00:04
 */

namespace Combos\Repositories;
use Combos\Entities\TiposTareas;

class TiposTareasRepo extends BaseRepo{

    public function getModel()
    {
        return new TiposTareas();
    }

    public function newTiposTareas(){
        $TiposTareas = $this->getModel();
        return $TiposTareas;
    }

} 