<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar personagens</title>
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        });
    </script>
</head>
<body>
    <?php include "menu.html"; ?>
    <hr/>
    <main>
        <div class="container-fluid mb-5">
            <div><h3>>Personagens existentes</h3></div>
            <?php include "personagens.php" ?>  
        </div>
    </main>
    <hr/>
    <div class="container-fluid ">
        <div><h3>>Adicionar Personagens</h3></div>
        <form method="POST" action="addpersonagem.php">
        <div class="container">
                    <div class="row mt-2">
                        <div class="col-6">
                        <div class="card-deck">    
                            <div class="card text-center"> 
                            <div class="card-body">
                            <h5 class="card-title">Nome:<input type="text" name="nomePersonagem"></h5>
                            <h6 class="card-subtitle mb-4 text-muted">
                                Class:<input type="text" name="class" size="10">
                                Nivel:<input type="text" name="nivel" size="5" >
                                Raça:<input type="text" name="raca" size="7">
                            </h6>
                            <div class="row">
                                <div class="col-6">Vida</div>
                                <div class="col-6">Mana</div>
                            </div>
                            <div class="row">
                                <div class="col-6"><input type="text" name="vida" size="5" ></div>
                                <div class="col-6"><input type="text" name="mana" size="5" ></div>
                            </div>
                            <div class="row mt-5 text-left">
                                <div class="col-3">
                                    <div class="col-8">For:</div><div class="col-6"><input type="text" name="forca" size="1"></div>
                                    <div class="col-8">Des:</div><div class="col-6"><input type="text" name="destreza" size="1"></div>
                                    <div class="col-8">Con:</div><div class="col-6"><input type="text" name="constituicao" size="1"></div>
                                    <div class="col-8">Int:</div><div class="col-6"><input type="text" name="inteligencia" size="1"></div>
                                    <div class="col-8">Sab:</div><div class="col-6"><input type="text" name="sabedoria" size="1"></div>
                                    <div class="col-8">Car:</div><div class="col-6"><input type="text" name="carisma" size="1"></div>
                                </div>
                                <div class="col-4 mt-5">
                                    <div><input type="checkbox" name="acrobacia" value="1">Acrobacia(Des)</div>
                                    <div><input type="checkbox" name="adeAnimais" value="1">Ade Animais(Sab)</div>
                                    <div><input type="checkbox" name="arcanismo" value="1">Arcanismo (Int)</div>
                                    <div><input type="checkbox" name="atletismo" value="1">Atletismo (For)</div>
                                    <div><input type="checkbox" name="atuacao" value="1">Atuação (Car)</div>
                                    <div><input type="checkbox" name="enganacao" value="1">Enganação(Car)</div>
                                    <div><input type="checkbox" name="furtividade" value="1">Furtividade (Des)</div>
                                    <div><input type="checkbox" name="historia" value="1">História (Int)</div>
                                    <div><input type="checkbox" name="intimidacao" value="1">Intimidação (Car)</div>
                                </div>
                                <div class="col-5 mt-5">
                                    <div><input type="checkbox" name="intuicao" value="1">Intuição (Sab)</div>
                                    <div><input type="checkbox" name="investigacao" value="1">Investigação (Int)</div>
                                    <div><input type="checkbox" name="medicina" value="1">Medicina (Sab)</div>
                                    <div><input type="checkbox" name="natureza" value="1">Natureza (Int)</div>
                                    <div><input type="checkbox" name="percepcao" value="1">Percepção (Sab)</div>
                                    <div><input type="checkbox" name="persuasao" value="1">Persuasão (Car)</div>
                                    <div><input type="checkbox" name="prestidigitacao" value="1">Prestidigitação (Des)</div>
                                    <div><input type="checkbox" name="religiao" value="1">Religião (Int)</div>
                                    <div><input type="checkbox" name="sobrevivencia" value="1">Sobrevivência (Sab)</div>
                                </div>
                            </div>
                        </div>
                        </div> 
                    </div>
                </div>   
                <!-- Parte de equipamentos -->
                <div class="col-6">
                <div class="card-deck">    
                    <div class="card text-center"> 
                    <div class="card-body">
                    <h5 class="card-title">Inventário do personagem</h5>
                    <div class="row">
                        <div>
                            <h5>Itens</h5>
                            <textarea name="itens" cols="65" rows="6"></textarea>
                        </div>
                    </div>
                    <div class="row mt-2 text-left">
                        <div class="col-5">
                            <h5>Armas e Armadura</h5>
                            Armadura:
                            <select name="armadura">
                                <?php include "armaduras.php" ?>
                            </select><br>
                            Armas 1º:&nbsp;
                            <select name="arma1">
                                <?php include "armas.php" ?>
                            </select><br>
                            Armas 2º:&nbsp;
                            <select name="arma2">
                                <?php include "armas.php" ?>
                            </select><br>
                            Armas 3º:&nbsp;
                            <select name="arma3">
                                <?php include "armas.php" ?>
                            </select><br>
                            Armas 4º:&nbsp;
                            <select name="arma4">
                                <?php include "armas.php" ?>
                            </select>
                        </div>
                        <div class="col-6">
                            <h5>Pericias de equipamentos</h5>
                            <div>
                            <textarea name="periciaDeEquipamento" cols="30" rows="9"></textarea>
                            </div>
                            <div>
                                Escudo<input type="checkbox" name="escudo" value="1">
                            </div>
                        </div>
                    </div>
                </div>
                </div> 
                </div>
                </div>
                <div class="row ml-3">
                <input type="submit" value="Adicionar">
                </div>
        </form>
    </div>
</body>
</html>