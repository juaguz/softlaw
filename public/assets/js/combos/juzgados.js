(function(){
	"use strict";
	var juzgados = new Helper();
	var idForm   = "#juzgadosFrm";
	var msg      = "#msg_juzgado";
	var idSelect = "#id_juzgado";
	var rutaSelect = "juzgados";
	juzgados.sendForm(idForm,function(rta){
	    if(rta.response == 'error'){
	        juzgados.ErrorMsg(rta,msg);
	    }else{
	        juzgados.SuccessMsg(rta,msg);
	        juzgados.ActualizarCombo(idSelect,rutaSelect);
	        juzgados.resetForm(idForm);
	    }
	});
})();


