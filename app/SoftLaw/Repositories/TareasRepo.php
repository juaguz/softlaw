<?php namespace SoftLaw\Repositories;

use SoftLaw\Entities\TareasEntities;

class TareasRepo extends BaseRepo{

	public function getModel(){

		return new TareasEntities();

	}

    public function calendario(){
        return
           \DB::table('tareas')
                ->join('tipos_tareas', 'tipos_tareas.id', '=', 'tareas.id_tipo_tarea')
                ->where('fecha_vto','!=','0000-00-00')
                ->get(array('tipos_tareas.descripcion as title', 'tareas.fecha_vto as start'));

    }

	public function newTarea(){

		$tarea = $this->getModel();

		return $tarea;

	}

	public function getTareas($idJucio){

		return $this->model->with('tipoTarea')->with('user')->get();
	}
	
}