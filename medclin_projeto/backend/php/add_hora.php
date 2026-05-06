<?php 
require_once('../../backend/db/config.php'); 
 if(isset($_POST['add_horar']))
 {
  //$username = $_POST['user_name'];// user name
  //$userjob = $_POST['user_job'];// user email
    $nomhor=trim($_POST['nameho']);
    $coddoc=trim($_POST['namedoc']);
    
  if(empty($nomhor)){
   $errMSG = "Por favor insira o número.";
  }

   
  $stmt = "SELECT * FROM horario WHERE nomhor ='$nomhor'";
   if(empty($nomhor)) {
             

    echo '<script type="text/javascript">
    swal("Erro!", "O registro a ser adicionado já existe!", {
                            icon : "error",
                            buttons: {                  
                                confirm: {
                                    className : "btn btn-danger"
                                }
                            },
                        });
    
            </script>';
    


         }

         else
         {  // Validaremos primero que el document no exista
            $sql="SELECT * FROM horario WHERE nomhor ='$nomhor'";
            

            $stmt = $connect->prepare($sql);
            $stmt->execute();

            if ($stmt->fetchColumn() == 0) // Si $row_cnt es mayor de 0 es porque existe el registro
            {
                if(!isset($errMSG))
  {
$stmt = $connect->prepare("INSERT INTO horario(nomhor,coddoc,estado) VALUES(:nomhor,:coddoc,'1')");
$stmt->bindParam(':nomhor',$nomhor);
$stmt->bindParam(':coddoc',$coddoc);

   if($stmt->execute())
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
    
   }
   else
   {
    $errMSG = "erro ao inserir....";
   }

  } 
            }

                else{

                    echo '<script type="text/javascript">
                    swal("Erro!", "Já existe o registro a adicionar ou não é possível adicionar!", {
                                            icon : "error",
                                            buttons: {                  
                                                confirm: {
                                                    className : "btn btn-danger"
                                                }
                                            },
                                        });
                    
                            </script>';
                    

 // if no error occured, continue ....

}
  

  }
 
 }
?>