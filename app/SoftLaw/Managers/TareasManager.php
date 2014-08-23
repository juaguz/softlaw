<?php 

namespace SoftLaw\Managers;

class TareasManager extends BaseManager{

	 public function getRules(){

	 	$rules = [
                "fecha_vto"=>"required",
	 	];
	 	return $rules;

	 }

    public function getMessages()
    {
        $message = [
            "fecha_vto.required"=>"El campo de Fecha de Vto es Obligatorio"
        ];

        return $message;
    }


}

?>