$(function(){

	// Lista de Continentes
	$.post( '../../frontend/funciones/area.php' ).done( function(respuesta)
	{
		$( '#area' ).html( respuesta );
	});

	// lista de Paises	
	$('#area').change(function()
	{
		var el_continente = $(this).val();
		
		// Lista de Paises
		$.post( '../../frontend/funciones/docar.php', { continente: el_continente} ).done( function( respuesta )
		{
			$( '#docar' ).html( respuesta );
		});
	});
	
	// Lista de Ciudades
	$( '#docar' ).change( function()
	{
		


		var el_horario = $(this).val();
		$.post( '../../frontend/funciones/doctor_horario', { horario: el_horario} ).done( function( respuesta )
		{
			$( '#horario' ).html( respuesta );
		});


		
	});

})
