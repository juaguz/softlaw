(function(){
    "use strict"
    var juicios    = new Helper();
    var idForm     = "#juiciosFrm";
    var msg        = "#msg_juicios";

    $('#tblJuicios').dataTable( {
        "language": {
            "url": "dataTables.german.lang"
        }
    });

    juicios.sendForm(idForm,function(rta){
        if(rta.response == 'faill'){
            juicios.ErrorMsg(rta,msg,3500);
        }else{
            juicios.SuccessMsg(rta,msg);
            juicios.resetForm(idForm);
        }
        $('html, body').animate({rollTop : 0},800);
    });
})();
