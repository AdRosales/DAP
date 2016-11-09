$(function () {
	$('#enviar').click(revisaDatos);
});

function revisaDatos() {

	var nombre = $('#nombre').val().trim();
	var autor = $('#autor').val().trim();
	var edicion = $('#edicion').val().trim();
	var año = $('#año').val().trim();
	var editorial = $('#editorial').val().trim();
	var isbn = $('#isbn').val().trim();
	var idioma = $('#idioma').val().trim();
	var paginas = $('#paginas').val().trim();
	var descripcion = $('#descripcion').val().trim();
	var codigo = $('#codigo').val().trim();

	if (nombre == '' || autor == '' || edicion == '' || año == '' || editorial == '' || isbn == '' || idioma == '' || paginas == '' || descripcion == '' || codigo == '') {
		//var usuario = $('#usuario').val().trim();
		//var datos = 'usuario=' + usuario + '&pass=' + pass;
		//alert('Favor de llenar los campos');
	} else {
$.ajax({
			//Objeto de JSON
			//Antes de ejecutar la petición
			//beforeSend: ,
			type: 'post',
			url: 'insertarL.php',

			//Enviando al servidor una cadena de datos
			//data: datos,
			//Enviando al servidor un JSON
			//Opción 1
			data: $('#capturaL').serialize(),
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
				alert('Se almacenaron correctamente los datos del libro');

			},
			//Si hay un error
			//XHR: XHtml Request
			//estado: timeout, error, abort, parsererror
			//error: Not found, Internal Server Error, estados HTTP
			error: function (xhr, status, error) {
				$('#info').html(status, error);
				alert('No se almacenaron correctamente los datos del libro');
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
	}
}