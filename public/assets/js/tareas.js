(function(){

    "use strict";

    var tareas     = new Helper();
    var idForm     = "#tareaFrm";
    var msg        = "#msg_tarea";
    var tablaTarea = "#tareasBody";
    var idJuicio   = $("#id_juicio").val();
    var extraData  = {name:'id_juicio',value:idJuicio};

    function tablaTareas(){
        tareas.ajax(null,"POST",tareas.basePath+'/tareas/getTareasJuicio',{id_juicio:idJuicio},function(html){
            $(tablaTarea).html(html);
        });
    }

    tareas.sendForm(idForm,function(rta){
        
        if(rta.response == 'faill'){
            tareas.ErrorMsg(rta,msg,3500);
        }else{
            tareas.SuccessMsg(rta,msg);
            tareas.resetForm(idForm);
            tablaTareas();

        }
        $('html, body, '+msg).animate({scrollTop : 0},800);
    },extraData);


    $(function(){
        tablaTareas();

    });

})();