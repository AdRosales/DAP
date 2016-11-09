$(function () {
	$('#enviar').click(revisaPass);
});

function revisaPass() {

	var u = $('#usuario').val().trim();
	var p = $('#pass').val().trim();
	var cpass = $('#cpass').val().trim();
	if (u == '' || p == '' || cpass == '') {
		//alert('Favor de llenar los campos');
	} else if (cpass == p){
		//var usuario = $('#usuario').val().trim();
		//var datos = 'usuario=' + usuario + '&pass=' + pass;
		$.ajax({
			//Objeto de JSON
			//Antes de ejecutar la petición
			//beforeSend: ,
			type: 'post',
			url: 'insertar.php',

			//Enviando al servidor una cadena de datos
			//data: datos,
			//Enviando al servidor un JSON
			//Opción 1
			data: $('#capturaU').serialize(),
			//Opción 2
//			data: {
		//				usuario: u,
		//				pass: p,
		//				cpass: cpass
		//			},
			//En caso exitoso
			//Respuesta recibe info del servidor
			success: function (respuesta) {
				$('#info').html(respuesta);
				alert('Se almacenó correctamente el usuario');

			},
			//Si hay un error
			//XHR: XHtml Request
			//estado: timeout, error, abort, parsererror
			//error: Not found, Internal Server Error, estados HTTP
			error: function (xhr, status, error) {
				$('#info').html(status, error);
				alert('No se almacenó correctamente el usuario');
			},
			//Se ejectuta invariablemente habiendo o no error
			//estado: success, notmodified, timeout, error, abort, parsererror
			complete: function (xhr, status) {
				$(':input').val('');
				//$('#cpass').val('');
				//$('#usuario').val('');
				//$('#info').html(status);
			}
		});
	} else {
		alert('Las contraseñas deben coincidir');
		$('#pass').val('');
		$('#cpass').val('');
	}
}
