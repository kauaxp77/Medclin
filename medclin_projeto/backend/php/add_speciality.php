<?php 
require_once('../../backend/db/config.php'); 
 if(isset($_POST['add_speciality']))
 {
  //$username = $_POST['user_name'];// user name
  //$userjob = $_POST['user_job'];// user email
    $nombrees=trim($_POST['nombrees']);
   
    
  if(empty($nombrees)){
   $errMSG = "Por favor insira o número.";
  }

   
  $stmt = "SELECT * FROM specialty WHERE nombrees ='$nombrees'";
   if(empty($nombrees)) {
             

         echo '<script type="text/javascript">
swal("Error!", "Ya existe el registro a agregar!", {
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
            $sql="SELECT * FROM specialty WHERE nombrees ='$nombrees'";
            

            $stmt = $connect->prepare($sql);
            $stmt->execute();

            if ($stmt->fetchColumn() == 0) // Si $row_cnt es mayor de 0 es porque existe el registro
            {
                if(!isset($errMSG))
  {
$stmt = $connect->prepare("INSERT INTO specialty(nombrees) VALUES(:nombrees)");
$stmt->bindParam(':nombrees',$nombrees);

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
    $errMSG = "error while inserting....";
   }

  } 
            }

                else{

                    echo '<script type="text/javascript">
                    swal("Erro!", "O registro a ser adicionado já existe ou não pode ser adicionado!", {
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