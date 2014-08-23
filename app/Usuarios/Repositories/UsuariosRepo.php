<?php
/**
 * Created by PhpStorm.
 * User: juan
 * Date: 16/08/14
 * Time: 15:54
 */

namespace Usuarios\Repositories;
use Usuarios\Entities\User;

class UsuariosRepo extends  BaseRepo{

    public function getModel()
    {
        return new User();
    }

    public function getUsuariosCombos(){



        return $this->getCombos('full_name','id');
    }
}