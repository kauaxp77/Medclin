<?php  
if(isset($_POST['add_prof']))
{
    $codpaci = $_POST['custid'];
    $usuario = $_POST['usnam'];
    $clave=MD5($_POST['usclav']);
  
   
    try {

        $query = "UPDATE customers SET usuario  =:usuario, clave=:clave,cargo='2', estado='1'  WHERE codpaci=:codpaci LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
         
            ':usuario' => $usuario,
            ':clave' => $clave,
            ':codpaci' => $codpaci
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {
            
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

            exit(0);
        }
        else
        {

            echo '<script type="text/javascript">
            swal("Erro!", "Não é possível adicionar dados!", {
                                    icon : "error",
                                    buttons: {                  
                                        confirm: {
                                            className : "btn btn-danger"
                                        }
                                    },
                                });
            
                    </script>';
            
            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>



