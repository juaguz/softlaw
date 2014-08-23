<?php
/**
 * Created by PhpStorm.
 * User: juan
 * Date: 04/08/14
 * Time: 00:03
 */

namespace Combos\Repositories;

use Combos\Entities\DeptosJudiciales;


class DeptosJudicialesRepo extends BaseRepo{

    public function getModel()
    {
        return new DeptosJudiciales();
    }

    public function newDepto(){
        return $this->getModel();
    }





} 