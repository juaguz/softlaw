<?php namespace SoftLaw\Repositories;

use SoftLaw\Entities\MovimientosEntities;

    class MovimientosRepo extends BaseRepo{

	public function getModel(){

		return new MovimientosEntities();

	}



	public function newMovimiento(){
		$Movimiento = $this->getModel();
		return $Movimiento;

	}
	
}