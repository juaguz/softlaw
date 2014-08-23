<?php
/**
 * Created by PhpStorm.
 * User: juan
 * Date: 03/08/14
 * Time: 23:53
 */

namespace Combos\Entities;


class Juzgados extends \Eloquent{

    protected $table = "juzgados";
    protected $fillable = ['descripcion'];
    public    $timestamps = false;

} 