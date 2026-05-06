$(function(){

    // Lista de docente
    $.post( '../../frontend/funciones/doctor.php' ).done( function(respuesta)
    {
        $( '#doct' ).html( respuesta );
    });
    
    
    // Lista de Ciudades
    $( '#doct' ).change( function()
    {
        var el_continente = $(this).val();

    });


    
    
    

})
