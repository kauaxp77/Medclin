<?php 
require_once('../../backend/db/config.php'); 
 if(isset($_POST['add_customers']))
 {
  //$username = $_POST['user_name'];// user name
  //$userjob = $_POST['user_job'];// user email
    $dnipa=trim($_POST['dnipaci']);
    $nombrep=trim($_POST['nompac']);
    $apellidop=trim($_POST['apepac']);
    $seguro=trim($_POST['segpa']);
    $tele=trim($_POST['telpa']);
    $sexo=trim($_POST['sexpa']);

   
   
    
  if(empty($dnipa)){
   $errMSG = "Por favor insira o número.";
  }

   
  $stmt = "SELECT * FROM customers WHERE dnipa ='$dnipa'";
   if(empty($dnipa)) {
             

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
            $sql="SELECT * FROM customers WHERE dnipa ='$dnipa'";
            

            $stmt = $connect->prepare($sql);
            $stmt->execute();

            if ($stmt->fetchColumn() == 0) // Si $row_cnt es mayor de 0 es porque existe el registro
            {
                if(!isset($errMSG))
  {
$stmt = $connect->prepare("INSERT INTO customers(dnipa,nombrep,apellidop,seguro,tele,sexo) VALUES(:dnipa,:nombrep,:apellidop,:seguro,:tele,:sexo)");
$stmt->bindParam(':dnipa',$dnipa);
$stmt->bindParam(':nombrep',$nombrep);
$stmt->bindParam(':apellidop',$apellidop);
$stmt->bindParam(':seguro',$seguro);
$stmt->bindParam(':tele',$tele);
$stmt->bindParam(':sexo',$sexo);

   if($stmt->execute())
   {
    

        echo '<script type="text/javascript">

        swal({
            title: "Bom trabalho!",
            text: "Você clicou no botão!",
            icon: "sucesso",
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
                    swal("Erro!", "O registro já existe ou não pode ser adicionado!", {
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