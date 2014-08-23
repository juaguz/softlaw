<?php 
namespace SoftLaw\Entities;

class JuiciosEntities extends \Eloquent{

	protected $fillable = ["partes","id_fuero","id_juzgado","piso","nro_expediente","id_dpto_judicial","id_etapa","id_proce","carp","id_estado","observaciones"];
	protected $table  = 'juicios';

    public function getCaducidades(){
        return $this->hasMany('SoftLaw\Entities\CaducidadesEntities','id_juicio','id');
    }

    public function getFuero(){
        return $this->hasOne('Combos\Entities\Fueros','id','id_fuero');
    }
    public function getJuzgado(){
        return $this->hasOne('Combos\Entities\Juzgados','id','id_juzgado');
    }
    public function getDeptoJud(){
        return $this->hasOne('Combos\Entities\DeptosJudiciales','id','id_dpto_judicial');
    }
    public function getEtapa(){
        return $this->hasOne('Combos\Entities\Etapas','id','id_etapa');
    }


}