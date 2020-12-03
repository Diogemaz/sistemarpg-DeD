<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combate</title>
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        });
    </script>
    <script src="script.js"></script>
</head>
<body>
    <?php include "menu.html"; ?>
    <main>
        <div class="container">
            <div class="row mt-4">
                <?php include "personagensCombate.php"; ?>
            </div>
        </div>
    </main>
    <hr/>
    <div class="container">
        <div class="row">
            <h3>>Controle de combate</h3>
        </div> 
    </div>
    <hr/>
    <div class="container">
    <div class="row">
        <div class="col-5 ml-2">
            <textarea cols="60" rows="20"></textarea>
        </div>
        <div class="col-6">
            <h4>Personagem da rodada</h4>
            <select id="persRodada">
            <?php
                include "conection.php"; 
                $sql = "SELECT * FROM personagem";
                $result = $con->query($sql);
                while($row = $result->fetch_assoc()){
            ?>
                <option value="<?php echo $row['nome'] ?>"><?php echo $row['nome'] ?></option>
            <?php } ?>
            </select>
            <h4>Dados</h4>
            <select name="habilidade" id="habilidade">
                <option value="forca">Força</option>
                <option value="destreza">Destreza</option>
                <option value="constituicao">Constituição</option>
                <option value="inteligencia">Inteligencia</option>
                <option value="sabedoria">Sabedoria</option>
                <option value="carisma">Carisma</option>
            </select>
            <select name="dadoSelect" id="dado">
                <option value="0">Nenhum</option>
                <option value="20">d20</option>
                <option value="10">d10</option>
                <option value="8">d8</option>
                <option value="6">d6</option>
                <option value="4">d4</option>
            </select>
            <input type="text" id="valorTirado" value="">
            <button id="resultado">Contabilizar</button>
            <br><br>
            <span id="mostrarResultado"></span>
        </div>
    </div>
    </div>
</body>
</html>