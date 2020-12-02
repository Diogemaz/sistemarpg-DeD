
<option value="nenhuma">Selecione</option>
<?php 
    include "conection.php";
    $sql = "SELECT nome FROM armadura";
    $result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
<option value="<?php echo $row['nome']; ?>"><?php echo $row['nome']; ?></option>
<?php 
  }
}
  $con->close();

?>