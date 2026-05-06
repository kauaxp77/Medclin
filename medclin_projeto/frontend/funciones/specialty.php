 <?php 
 require '../../backend/db/config.php';
 echo '<option value="0">selecione a especialidade</option>';
 $stmt = $connect->prepare('SELECT * FROM `specialty` ORDER BY codespe  ASC');

  $stmt->execute();


  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            extract($row);
            ?>
            <option value="<?php echo $codespe ; ?>"><?php echo $nombrees; ?></option>

            <?php
        }

  ?>


