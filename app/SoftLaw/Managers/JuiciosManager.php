<?php 

namespace SoftLaw\Managers;

class JuiciosManager extends BaseManager{

	 public function getRules(){

	 	$rules = [
	 				"partes"=>"required",
	 				"nro_expediente" =>"required|unique:juicios",
	 				"carp" =>"required",
	 	];
	 	return $rules;

	 }

    public function getMessages()
    {
        $messages = [
                      "partes.required"=>"El campo de Partes es Obligatorio",
                      "nro_expediente.required"=>"El nro de Expediente es obligatorio",
                      "carp.required"=>"El campo de carpeta es obligatorio",
                      "nro_expediente.unique"=>"Ese nro de Expediente ya se encuentra Registrado"
                    ];
        return $messages;
    }


}

?>