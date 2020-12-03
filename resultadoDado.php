<?php
    include "conection.php";
    $total = array();
    $nome = $_POST['personagem'];
    $sql = "SELECT * FROM personagem WHERE nome = '$nome'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    $habilidade = $_POST['habilidade'];
    $dado = (int)$_POST['dado'];
    $valorTirado = (int)$_POST['valorTirado'];

    $total['valor'] = $valorTirado+floor(($row[$habilidade]-10)/2);
    
    echo json_encode($total);
?>