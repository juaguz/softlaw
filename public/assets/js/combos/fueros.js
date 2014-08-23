(function(){
	"use strict";
	var fueros     = new Helper();
	var idForm     = "#fueroFrm";
	var msg        = "#msg_fuero";
	var idSelect   = "#id_fuero";
	var rutaSelect = "fueros";
	fueros.sendForm(idForm,function(rta){
	    if(rta.response == 'error'){
	        fueros.ErrorMsg(rta,msg);
	    }else{
	        fueros.SuccessMsg(rta,msg);
	        fueros.ActualizarCombo(idSelect,rutaSelect);
	        fueros.resetForm(idForm);
	    }
	});


})();