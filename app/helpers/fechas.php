<?php
use Carbon\Carbon;
function formatToMysql($value){
    return Carbon::createFromFormat('d/m/Y', $value)->toDateString();
}

function fromMysql($value){
    if(!empty($value)){
        $fecha =  Carbon::createFromFormat('Y-m-d', $value);
        //04:39:26
        return $fecha->format('d/m/Y');
    }

}
function TimeStampsMysql($value){
    if(!empty($value)){
        $fecha =  Carbon::createFromFormat('Y-m-d h:i:s', $value);
        //04:39:26
        return $fecha->format('d/m/Y');
    }


}

function horaToMysql($value){
    return Carbon::createFromFormat('h:i A', $value)->toTimeString();
}