<?php  
if(isset($_POST['delete_appoin']))
{
    $codcit=trim($_POST['appoid']);
   
    try {

        $query = "UPDATE appointment SET estado='0' WHERE codcit=:codcit LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':codcit' => $codcit
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



