(function(){
    "use strict"
    var fechas_caducidad    = new Helper();
    var idForm     = "#fechaCaducidadFrm";
    var msg        = "#msg_fechaCaducidad";
    var tablaFechasAudiencias = "#fechasCaducidadTable";
    var idJuicio   = $("#id_juicio").val();
    var extraData  = {name:'id_juicio',value:idJuicio};

    function tablaFechas(){
        fechas_caducidad.ajax(null,"POST",fechas_caducidad.basePath+'fechas_caducidad/getFechasCaducidad',{id_juicio:idJuicio},function(html){
            $(tablaFechasAudiencias).html(html);
        })
    }

    fechas_caducidad.sendForm(idForm,function(rta){
        if(rta.response == 'faill'){
            fechas_caducidad.ErrorMsg(rta,msg,3500);
        }else{
            fechas_caducidad.SuccessMsg(rta,msg);
            fechas_caducidad.resetForm(idForm);
            tablaFechas();

        }
        $('html, body, '+msg).animate({scrollTop : 0},800);
    },extraData);

    $(function(){
        tablaFechas();
    })
})();
