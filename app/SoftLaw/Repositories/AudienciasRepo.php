<?php namespace SoftLaw\Repositories;

use SoftLaw\Entities\AudienciasEntities;

    class AudienciasRepo extends BaseRepo{

	public function getModel(){

		return new AudienciasEntities();

	}


    public function calendario(){

        return $this->model->select(['fecha as start'])->get();
    }

	public function newAudiencia(){

		$audiencia = $this->getModel();

		return $audiencia;

	}


	
}