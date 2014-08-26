<?php


namespace SoftLaw\Entities;


class FechasCaducidadEntities extends \Eloquent {
    protected $fillable = ['fecha','id_juicio'];
    protected $table    = 'caducidades';
    public function setFechaAttribute($value){

        $this->attributes['fecha'] = formatToMysql($value);

    }
    public function getFechaAttribute($value){

        return fromMysql($value);

    }


    

}