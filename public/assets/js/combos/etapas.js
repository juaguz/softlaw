(function(){
	"use strict";
	var etapas = new Helper();
	var idForm     = "#etapasFrm";
	var msg        = "#msg_etapa";
	var idSelect   = "#id_etapa";
	var rutaSelect = "etapas";
	etapas.sendForm(idForm,function(rta){
    	if(rta.response == 'error'){
        	qetapas.ErrorMsg(rta,msg);
    	}else{
        	etapas.SuccessMsg(rta,msg);
        	etapas.ActualizarCombo(idSelect,rutaSelect);
        	etapas.resetForm(idForm);
    	}
	});


})();



