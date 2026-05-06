<?php  
if(isset($_POST['upd_horari']))
{
    $codhor=trim($_POST['horid']);
    $nomhor=trim($_POST['nameho']);
    $coddoc=trim($_POST['namedoc']);

    try {

        $query = "UPDATE horario SET nomhor=:nomhor, coddoc=:coddoc, estado='1' WHERE codhor=:codhor LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':nomhor' => $nomhor,
            ':coddoc' => $coddoc,
            ':codhor' => $codhor
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



