<?php
    include "conection.php";

    //Recebimento dos dados
    $nome = $_POST['nomePersonagem'];
    $class = $_POST['class'];
    $nivel = $_POST['nivel'];
    $raca = $_POST['raca'];
    $for = (int)$_POST['forca'];
    $des = (int)$_POST['destreza'];
    $cons = (int)$_POST['constituicao'];
    $int = (int)$_POST['inteligencia'];
    $sab = (int)$_POST['sabedoria'];
    $car = (int)$_POST['carisma'];
    $itens = $_POST['itens'];
    $armadura = $_POST['armadura'];
    $arma1 = $_POST['arma1'];
    $arma2 = $_POST['arma2'];
    $arma3 = $_POST['arma3'];
    $arma4 = $_POST['arma4'];
    $vida = $_POST['vida'];
    $mana = $_POST['mana'];
    $periciaDeEquipamento = $_POST['periciaDeEquipamento'];
    if(isset($_POST['escudo'])){
        $escudo = (int)$_POST['escudo'];
    }else{
        $escudo = 0;
    }
    if(isset($_POST['acrobacia'])){
        $acrobacia = (int)$_POST['acrobacia'];
    }else{
        $acrobacia = 0;
    }
    if(isset($_POST['adeAnimais'])){
        $adeAnimais = (int)$_POST['adeAnimais'];
    }else{
        $adeAnimais = 0;
    }
    if(isset($_POST['arcanismo'])){
        $arcanismo = (int)$_POST['arcanismo'];
    }else{
        $arcanismo = 0;
    }
    if(isset($_POST['atletismo'])){
        $atletismo = (int)$_POST['atletismo'];
    }else{
        $atletismo = 0;
    }
    if(isset($_POST['atuacao'])){
        $atuacao = (int)$_POST['atuacao'];
    }else{
        $atuacao = 0;
    }
    if(isset($_POST['enganacao'])){
        $enganacao = (int)$_POST['enganacao'];
    }else{
        $enganacao = 0;
    }
    if(isset($_POST['furtividade'])){
        $furtividade = (int)$_POST['furtividade'];
    }else{
        $furtividade = 0;
    }
    if(isset($_POST['historia'])){
        $historia = (int)$_POST['historia'];
    }else{
        $historia = 0;
    }
    if(isset($_POST['intimidacao'])){
        $intimidacao = (int)$_POST['intimidacao'];
    }else{
        $intimidacao = 0;
    }
    if(isset($_POST['intuicao'])){
        $intuicao = (int)$_POST['intuicao'];
    }else{
        $intuicao = 0;
    }
    if(isset($_POST['investigacao'])){
        $investigacao = (int)$_POST['investigacao'];
    }else{
        $investigacao = 0;
    }
    if(isset($_POST['medicina'])){
        $medicina = (int)$_POST['medicina'];
    }else{
        $medicina = 0;
    }
    if(isset($_POST['natureza'])){
        $natureza = (int)$_POST['natureza'];
    }else{
        $natureza = 0;
    }
    if(isset($_POST['percepcao'])){
        $percepcao = (int)$_POST['percepcao'];
    }else{
        $percepcao = 0;
    }
    if(isset($_POST['persuasao'])){
        $persuasao = (int)$_POST['persuasao'];
    }else{
        $persuasao = 0;
    }
    if(isset($_POST['prestidigitacao'])){
        $prestidigitacao = (int)$_POST['prestidigitacao'];
    }else{
        $prestidigitacao = 0;
    }
    if(isset($_POST['religiao'])){
        $religiao = (int)$_POST['religiao'];
    }else{
        $religiao = 0;
    }
    if(isset($_POST['sobrevivencia'])){
        $sobrevivencia = (int)$_POST['sobrevivencia'];
    }else{
        $sobrevivencia = 0;
    }

    //Bonus de raça
    if($raca == "Humano"){
        $for+=1;
        $des+=1;
        $cons+=1;
        $int+=1;
        $sab+=1;
        $car+=1;
    }else if($raca == "Anões"){
        $cons+=2;
    }else if($raca == "Elfo" || $raca == "Halflings"){
        $des+=2;
    }else if($raca == "Draconato"){
        $for+=2;
        $car+=1;
    }else if($raca == "Gnomo"){
        $int+=2;
    }else if($raca == "Meio-elfo"){
        $car+=2;
        $des+=1;
        $int+=1;
    }else if($raca == "Meio-orc"){
        $for+=2;
        $cons+=1;
    }else{
        $int+=1;
        $car+=2;
    }
    //Definição da class de armadura
    if($armadura == "nenhuma"){
        echo "Erro";
        if($class == "barbaro"){
            $classDeArmadura = 10+floor((($des-10)/2))+floor((($cons-10)/2));
        }else if($class == "monge"){
            $classDeArmadura = 10+floor((($des-10)/2))+floor((($sab-10)/2));
        }else if($class == "feiticeiro"){
            $classDeArmadura = 13+floor((($des-10)/2));
        }else{
            $classDeArmadura = 10+floor((($des-10)/2));
        }
    }else{
        $sql = "SELECT nome, class FROM armadura WHERE nome = '$armadura'";
        $result = mysqli_query($con, $sql);
        $row = $result->fetch_assoc();
        echo $armadura;
        if($armadura == "Acolchoada" || $armadura == "Couro" || $armadura == "Couro Batido"){
            $classDeArmadura = (int)$row['class']+floor((($des-10)/2));
        }else if($armadura == "Gibão de Peles" || $armadura == "Camisão de Malha" || $armadura == "Brunea" || $armadura == "Peitoral" || $armadura == "Meia-Armadura"){
            if(floor(($des-10)/2) > 2){
                $classDeArmadura = (int)$row['class']+2;
            }else if(floor(($des-10)/2) <= 2){
                $classDeArmadura = (int)$row['class']+floor((($des-10)/2));
            }else{
                $classDeArmadura = (int)$row['class'];
            }
        }
    }
    if($escudo == "1"){
        $classDeArmadura+=2;
    }
    $iniciativa = floor((($des-10)/2));

    //Deslocamento
    if($raca == "Anão" || $raca == "Halfling" || $raca == "Gnomo"){
        $deslocamento = 7.5;
    }else{
        $deslocamento = 9;
    }

    //Bonus de proficiencia 
    if($nivel <= 4){
        $bonus = 2;
    }else if($nivel <= 8){
        $bonus = 3;
    }else if($nivel <= 12){
        $bonus = 4;
    }else if($nivel <= 16){
        $bonus = 5;
    }else if($nivel <= 20){
        $bonus = 6;
    }

    //envios ao banco
    $stmt = $con->prepare("INSERT INTO personagem (nome, class, nivel, armadura, iniciativa, deslocamento, bonus, forca, destreza, constituicao, inteligencia, sabedoria, carisma, vida, vida_atual, mana, mana_atual) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?)");
    $stmt->bind_param("ssiiiiiiiiiiiiiii", $nome, $class, $nivel, $classDeArmadura, $iniciativa, $deslocamento, $bonus, $for, $des, $cons, $int, $sab, $car,$vida,$vida,$mana,$mana);
    $stmt->execute();
    $sql = "SELECT id_personagem FROM personagem WHERE nome = '$nome'";
    $result = mysqli_query($con, $sql);
    $row = $result->fetch_assoc();
    $idPersonagem = $row['id_personagem'];
    echo $idPersonagem;
    $stmt = $con->prepare("INSERT INTO armaspersonagem (id_personagem, armadura_atual, arma, arma2, arma3, arma4, itens, escudo) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssssi", $idPersonagem, $armadura, $arma1, $arma2, $arma3, $arma4, $itens, $escudo);
    $stmt->execute();
    $stmt = $con->prepare("INSERT INTO pericias (id_personagem, acrobacia, ade_animais, arcanismo,
     atletismo, atuacao, enganacao, furtividade, historia, intimidacao, intuicao, investigacao,
     medicina, natureza, percepcao, persuasao, 	prestidigitacao, religiao, sobrevivencia, equipamento) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("iiiiiiiiiiiiiiiiiiis", $idPersonagem, $acrobacia, $adeAnimais, $arcanismo, $atletismo, $atuacao,
    $enganacao, $furtividade, $historia, $intimidacao, $intuicao, $investigacao, $medicina, 
    $natureza, $percepcao, $persuasao, $prestidigitacao, $religiao, $sobrevivencia, $periciaDeEquipamento);
    $stmt->execute();

?>