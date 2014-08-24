<?php 

namespace SoftLaw\Managers;

class MovimientosManager extends BaseManager{

	 public function getRules(){

	 	$rules = [
                "fecha"=>"required",
	 	];
	 	return $rules;

	 }

    public function getMessages()
    {
        $message = [
            "fecha.required"=>"El campo de Fecha de  es Obligatorio",
        ];

        return $message;
    }


}

?>