<?php
    include "conection.php";
    $total = array();
    $pericia = $_POST['pericia'];
    $nome = $_POST['personagem'];
    $sql = "SELECT * FROM personagem 
    INNER JOIN pericias ON personagem.id_personagem = pericias.id_personagem WHERE nome = '$nome'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    $habilidade = $_POST['habilidade'];
    $dado = (int)$_POST['dado'];
    $valorTirado = (int)$_POST['valorTirado'];
   
    if($pericia == "nenhum"){
        $valorBonus = 0;
    }else{
        if($row[$pericia] == 1){
            $valorBonus = (int)$row['bonus'];
        }else{
            $valorBonus = 0;
        }
    }  

    $total['valor'] = $valorTirado+floor(($row[$habilidade]-10)/2)+$valorBonus;
    
    echo json_encode($total);
?>