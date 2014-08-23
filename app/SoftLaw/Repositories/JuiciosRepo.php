<?php namespace SoftLaw\Repositories;

use SoftLaw\Entities\JuiciosEntities;

class JuiciosRepo extends BaseRepo{

	public function getModel(){

		return new JuiciosEntities();

	}



	public function newJuicio(){

		$juicio = $this->getModel();

		return $juicio;

	}
	
}