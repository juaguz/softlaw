<?php
/**
 * Created by PhpStorm.
 * User: juan
 * Date: 03/08/14
 * Time: 23:53
 */

namespace Combos\Entities;


class DeptosJudiciales extends \Eloquent{

    protected $table = "dptos_judiciales";
    protected $fillable = ["descripcion"];
    public    $timestamps = false;

} 