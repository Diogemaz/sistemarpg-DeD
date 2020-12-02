
<option value="nenhuma">Selecione</option>
<?php 
    include "conection.php";
    $sql = "SELECT nome_arma FROM armas";
    $result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
<option value="<?php echo $row['nome_arma']; ?>"><?php echo $row['nome_arma']; ?></option>
<?php 
  }
}
  $con->close();

?>