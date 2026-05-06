 <?php 
 require '../../backend/db/config.php';
 echo '<option value="0">selecione e médico</option>';
 $stmt = $connect->prepare('SELECT * FROM `doctor` ORDER BY coddoc  ASC');

  $stmt->execute();


  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            extract($row);
            ?>
            <option value="<?php echo $coddoc ; ?>"><?php echo $apedoc; ?> <?php echo $nomdoc; ?></option>

            <?php
        }

  ?>


