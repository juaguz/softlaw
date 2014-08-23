<?php 

namespace SoftLaw\Managers;

class AudienciasManager extends BaseManager{

	 public function getRules(){

	 	$rules = [
                "fecha"=>"required",
                "hora"=>"required",
	 	];
	 	return $rules;

	 }

    public function getMessages()
    {
        $message = [
            "fecha.required"=>"El campo de Fecha de  es Obligatorio",
            "hora.required" =>"El campo de Hora de  es Obligatorio"
        ];

        return $message;
    }


}

?>