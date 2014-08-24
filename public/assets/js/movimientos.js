(function(){
    
"use strict";

var movimientos     = new Helper();
var idForm          = "#movimientoFrm";
var msg             = "#msg_movimiento";
var tablaMovimiento = "#tablaMovimiento";
var idJuicio       = $("#id_juicio").val();
var extraData      = {name:'id_juicio',value:idJuicio};

function tablaMovimientos(){
    movimientos.ajax(null,"POST",movimientos.basePath+'/movimientos/getMovimientosJuicios',{id_juicio:idJuicio},function(html){
        $(tablaMovimiento).html(html);
    })
}

movimientos.sendForm(idForm,function(rta){
    if(rta.response == 'faill'){
        movimientos.ErrorMsg(rta,msg,3500);
    }else{
        movimientos.SuccessMsg(rta,msg);
        movimientos.resetForm(idForm);
        tablaMovimientos();

    }
    $('html, body, '+msg).animate({scrollTop : 0},800);
},extraData);
$(function(){
    tablaMovimientos();

});

})();