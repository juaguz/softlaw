(function(){
	"use strict"
	var dptJud     = new Helper();
	var idForm     = "#deptoJudicialFrm";
	var msg        = "#msg_deptoJudicial";
	var idSelect   = "#id_dpto_judicial";
	var rutaSelect = "deptoJudicial";
	dptJud.sendForm(idForm,function(rta){
	    if(rta.response == 'error'){
	        dptJud.ErrorMsg(rta,msg);
	    }else{
	        dptJud.SuccessMsg(rta,msg);
	        dptJud.ActualizarCombo(idSelect,rutaSelect);
	        dptJud.resetForm(idForm);
	    }
	});

})();
