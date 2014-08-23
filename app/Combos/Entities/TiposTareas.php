<?php


namespace Combos\Entities;


class TiposTareas extends \Eloquent {
    protected $fillable = [];
    protected $table    = "tipos_tareas";

    public function tarea() {
        return $this->belongs_to('Softlaw\Entities\TareasEntities')->select(array('descripcion as title'));
    }

}