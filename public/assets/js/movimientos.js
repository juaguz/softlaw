(function(){
    
"use strict";

var audiencias     = new Helper();
var idForm     = "#audienciaFrm";
var msg        = "#msg_audiencia";
var tablaAudiencia = "#tablaAudiencia";
var idJuicio   = $("#id_juicio").val();
var extraData  = {name:'id_juicio',value:idJuicio};

function tablaAudiencias(){
    audiencias.ajax(null,"POST",audiencias.basePath+'/audiencias/getAudienciasJuicios',{id_juicio:idJuicio},function(html){
        $(tablaAudiencia).html(html);
    })
}

audiencias.sendForm(idForm,function(rta){
    if(rta.response == 'faill'){
        audiencias.ErrorMsg(rta,msg,3500);
    }else{
        audiencias.SuccessMsg(rta,msg);
        audiencias.resetForm(idForm);
        tablaAudiencias();

    }
    $('html, body, '+msg).animate({scrollTop : 0},800);
},extraData);
$(function(){
    tablaAudiencias();

});

})();