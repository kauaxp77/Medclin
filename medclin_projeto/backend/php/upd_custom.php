<?php  
if(isset($_POST['upd_custome']))
{
    $codpaci=trim($_POST['custid']);
    $dnipa=trim($_POST['dnipaci']);
    $nombrep=trim($_POST['nompac']);
    $apellidop=trim($_POST['apepac']);
    $seguro=trim($_POST['segpa']);
    $tele=trim($_POST['telpa']);
    $sexo=trim($_POST['sexpa']);
   

    try {

        $query = "UPDATE customers SET dnipa=:dnipa,nombrep=:nombrep,apellidop=:apellidop,seguro=:seguro,tele=:tele,sexo=:sexo WHERE codpaci=:codpaci LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':dnipa' => $dnipa,
            ':nombrep' => $nombrep,
            ':apellidop' => $apellidop,
            ':seguro' => $seguro,
            ':tele' => $tele,
            ':sexo' => $sexo,
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



