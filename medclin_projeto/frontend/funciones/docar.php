
  <?php 
  require '../../backend/db/config.php'; 
  $el_continente = $_POST['continente'];
  $stmt = $connect->query("SELECT * FROM doctor WHERE codespe = $el_continente");

  

  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{

  echo '<option value="' . $row['coddoc']. '">' . $row['apedoc'] . '</option>' . "\n";
}

   ?>

  
