<?php  
if(isset($_POST['upd_speciality']))
{
    $codespe=trim($_POST['esid']);
    $nombrees=trim($_POST['namees']);
   

    try {

        $query = "UPDATE specialty SET nombrees=:nombrees WHERE codespe=:codespe LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':nombrees' => $nombrees,
            ':codespe' => $codespe
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



