$(function(){

    // Lista de docente
    $.post( '../../frontend/funciones/specialty.php' ).done( function(respuesta)
    {
        $( '#esdoc' ).html( respuesta );
    });
    
    
    // Lista de Ciudades
    $( '#esdoc' ).change( function()
    {
        var el_continente = $(this).val();

    });


    
    
    

})
