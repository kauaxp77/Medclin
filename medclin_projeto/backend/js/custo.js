$(function(){

    // Lista de docente
    $.post( '../../frontend/funciones/customer.php' ).done( function(respuesta)
    {
        $( '#cust' ).html( respuesta );
    });
    
    
    // Lista de Ciudades
    $( '#cust' ).change( function()
    {
        var el_continente = $(this).val();

    });


    
    
    

})
