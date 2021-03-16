$(document).on('ready',funcionPrincipal);

function funcionPrincipal(){
	$("#btnAgregar").on('click', agregarFilaElemento);
	$("body").on('click', "btn-danger", eliminarFilaElemento);
}

function eliminarFilaElemento(){
	$(this).parent().parent().fadeOut('slow', function() {
		$(this).remove();
	});
}

function agregarFilaElemento(){
	$("#tablaElementos")
	.append
	(
		$('<tr>')
		.append
		(
			$('<td>')
			.append
			(
				$('<input>').attr('type', 'text').addClass('form-control').attr('name','pesoElemento[]')
			)
		)
		.append
		(
			$('<td>')
			.append
			(
				$('<input>').attr('type','text').addClass('form-control').attr('name','caloriaElemento[]')
			)
		)
		.append
		(
			$('<td>').addClass('text-center')
			.append
			(
				$('<div>').addClass('btn btn-danger').text('Eliminar')
			)
		)
	)
}