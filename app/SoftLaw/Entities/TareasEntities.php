<?php 
namespace SoftLaw\Entities;


class TareasEntities extends \Eloquent{

	protected $fillable = ["id_juicio","id_usuario_asignado","hora_vto","fecha_vto","id_tipo_tarea","descripcion"];
	protected $table    = 'tareas';


    public function setFechaVtoAttribute($value)
    {
        $this->attributes['fecha_vto'] = formatToMysql($value);
    }
    public function setHoraVtoAttribute($value)
    {
        $this->attributes['hora_vto'] = horaToMysql($value);
    }

        public function getCreatedAtAttribute($value){
            return TimeStampsMysql($value);
        }

    public function getFechaVtoAttribute($value){
        return fromMysql($value);
    }

    public function tipoTarea(){
        return $this->hasOne('Combos\Entities\TiposTareas','id','id_tipo_tarea');

    }
    public function user(){
        return $this->hasOne('Usuarios\Entities\User','id','id_usuario_asignado');

    }

    public function scopeSelectFechas($query,$campo="fecha"){
        return $query->select("fecha_vto as start");
    }




}