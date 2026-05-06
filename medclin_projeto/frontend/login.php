<?php 
session_start();
    if (isset($_SESSION['id'])){
        header('Location: administrador/escritorio.php');
    }
include_once '../backend/php/login.php'

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css "href="../backend/css/style.css">
    <link rel="stylesheet" type="text/css "href="../backend/css/css/all.min.css">
    <link rel="stylesheet" href="../backend/css/sweetalert.css">
	<link rel="icon" href="../backend/img/logo.png" type="image/x-icon"/>
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
   <!--  <img class="wave"src="../assets/img/wave.png" alt="">  -->
    <div class="contenedor">
    <div class="img">
    <img src="../backend/img/logo1.png" alt="">
    </div>
    <div class="contenido-login">

    <form autocomplete="off" method="POST"  role="form">

    <img src="../backend/img/logo_med.png" alt="">
    <h2>Login</h2>
    <?php
    if(isset($errMsg)){
    echo '<div style="color:#FF0000;text-align:center;font-size:20px;">'.$errMsg.'</div>';  
         }
?>
    <div class="input-div nit">
    <div class="i">
    <i class="fas fa-user"></i>
    </div>
    <div class="div">

     <input type="text"  name="usuario" value="<?php if(isset($_POST['usuario'])) echo $_POST['usuario'] ?>" autocomplete="off" placeholder="USUARIO">
    </div>
    </div>
    <div class="input-div pass">
    <div class="i">
    <i class="fas fa-lock"></i>
    </div>
    <div class="div">

    <input type="password" required="true" name="clave" value="<?php if(isset($_POST['clave'])) echo ($_POST['clave']) ?>" placeholder="senha" >
    </div>
    </div>
    

   
    <button class="btn" name='login' type="submit"> Iniciar sessão
    </button> 
	
    </form>
     <div id="msg_error" class="alert alert-danger" role="alert" style="display: none"></div>

    </div>
    </div>
     <script src="../backend/js/jquery.js"></script>
    <script src="../backend/js/sweetalert.min.js"></script>
    <!-- Js personalizado -->
    
	
</body>

</html>
