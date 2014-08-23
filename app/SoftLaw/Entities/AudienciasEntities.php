<?php 
namespace SoftLaw\Entities;


class AudienciasEntities extends \Eloquent{

	protected $fillable = ["id_juicio","hora","fecha","descripcion"];
	protected $table    = 'audiencias';


    public function setFechaAttribute($value)
    {
        $this->attributes['fecha'] = formatToMysql($value);
    }

    public function setHoraAttribute($value){

        $this->attributes['hora'] = horaToMysql($value);

    }

    public function getCreatedAtAttribute($value){
        return TimeStampsMysql($value);
    }
    public function getFechaAttribute($value){
        return fromMysql($value);
    }





}