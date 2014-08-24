<?php
/**
 * Created by PhpStorm.
 * User: juan
 * Date: 17/08/14
 * Time: 21:34
 */

namespace SoftLaw\Entities;


class MovimientosEntities extends \Eloquent{

    protected $table = "movimientos";

    protected $fillable = ["fecha","descripcion","id_juicio"];

    public function setFechaAttribute($value)
    {
        $this->attributes['fecha'] = formatToMysql($value);
    }
    public function getFechaAttribute($value){
        return fromMysql($value);
    }


} 