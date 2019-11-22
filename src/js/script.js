// JavaScript Document

//inicialização
function init(){
	var vo_slc=document.forms['frmpoli'].instrumento;
	for(var i=0;i<vo_slc.options.length;i++) {
		if(vo_slc.options[i].value==vs_index) {
			vo_slc.options[i].selected=true;
			break;
		}
	}
}
window.onload=init;

//verifica se algum valor foi selecionado
function checkToSubmit(vo_form) {
	if(!vo_form.instrumento.value) {
		alert("Informe algum instrumento!");
		return false;
	}
	return true;
}
