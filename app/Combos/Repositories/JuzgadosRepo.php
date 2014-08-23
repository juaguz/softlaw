<?php
/**
 * Created by PhpStorm.
 * User: juan
 * Date: 04/08/14
 * Time: 00:04
 */

namespace Combos\Repositories;
use Combos\Entities\Juzgados;

class JuzgadosRepo extends BaseRepo{

    public function getModel()
    {
        return new Juzgados();
    }

    public function newJuzgado(){
        $juzgado = $this->getModel();
        return $juzgado;
    }

} 