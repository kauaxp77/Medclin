<?php
if(isset($_POST['delete_horari'])){
////////////// Elimianr registro de la tabla /////////
$consulta = "DELETE FROM `horario` WHERE `codhor`=:codhor";
$sql = $connect-> prepare($consulta);
$sql -> bindParam(':codhor', $codhor, PDO::PARAM_INT);
$codhor=trim($_POST['horid']);

$sql->execute();

if($sql->rowCount() > 0)
{
$count = $sql -> rowCount();

echo '<script type="text/javascript">

swal({
    title: "Bom trabalho!",
    text: "Você clicou no botão!",
    icon: "success",
    buttons: {
        confirm: {
            text: "Confirmar",
            value: true,
            visible: true,
            className: "btn btn-success",
            closeModal: true
        }
    }
});


        </script>';

}
else{

    echo '<script type="text/javascript">
    swal("Erro!", "Não foi possível excluir o registro!", {
                            icon : "error",
                            buttons: {                  
                                confirm: {
                                    className : "btn btn-danger"
                                }
                            },
                        });
    
            </script>';
    

print_r($sql->errorInfo()); 
}
}// Cierra envio de guardado
?>