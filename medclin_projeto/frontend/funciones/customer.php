 <?php 
 require '../../backend/db/config.php';
 echo '<option value="0">Selecione o paciente</option>';
 $stmt = $connect->prepare('SELECT * FROM `customers` ORDER BY codpaci  ASC');

  $stmt->execute();


  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            extract($row);
            ?>
            <option value="<?php echo $codpaci ; ?>"><?php echo $apellidop; ?> <?php echo $nombrep; ?></option>

            <?php
        }

  ?>


