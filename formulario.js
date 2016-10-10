$(document).ready(formulario());

function formulario(){
	$(":input").keyup(habilitaBotones);
	$("#clean").click(limpiarFormulario);
	$("#send").click(validationFormulario);
}

function habilitaBotones(){
	$("#send").removeClass('disabled');
	$("#clean").removeClass('disabled');
}

function limpiarFormulario(){
	$(":input").val('');
	$("#clean").addClass('disabled');
	$("#send").addClass('disabled');
}


function deshabilitaBotones(){
	if(validationFormulario()){
	$(":input").val('');
	$("#clean").addClass('disabled');
	$("#send").addClass('disabled');
	}
}


function validationFormulario(){
	var nom = $("#nombre").val();
	var men = $("#mensaje").val();
	var email = $("#email").val();
	var tel = $("#tel").val();
	var emailVal = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		if (nom === '' || men === '' || email === '' || tel === '') {
			alert("Favor de llenar todos los campos...!!!!!!");
			return false;
				} else if (!(email).match(emailVal)) {
				alert("Favor de escribir un correo valido...!!!!!!");
				return false;
					} else {
					alert(" Name : " + nom + " \n Email : " + email + " \n Telefono : " + tel + " \n Mensaje : " + men + "\n\n Form Submitted Successfully......");
					$(":input").val('');
					$("#clean").addClass('disabled');
					$("#send").addClass('disabled');
					return true;
	}
}

/*
function sendForm(){
	if(validationFormulario()==='true'){
	alert(" Name : " + nom + " \n Email : " + email + " \n Telefono : " + tel + " \n Mensaje : " + men + "\n\n Form Submitted Successfully......");
	$(":input").val('');
	$("#clean").addClass('disabled');
	$("#send").addClass('disabled');
}
*/