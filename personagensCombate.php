<?php
    include "conection.php";
    $sql = "SELECT * FROM personagem 
    INNER JOIN pericias ON personagem.id_personagem = pericias.id_personagem 
    INNER JOIN armaspersonagem ON personagem.id_personagem = armaspersonagem.id_personagem";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    
?>
<script>
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    });
</script>
<div class="container">
                <div class="row mt-2">
                    <div class="col-4">
                    <div class="card-deck">    
                        <div class="card text-center"> 
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $row['nome']; ?></h5>
                        <h6 class="card-subtitle mb-4 text-muted"><?php echo $row['class']; ?>/<?php echo $row['nivel']; ?></h6>
                        <div class="row pl-0">
                            <div class="col-4 pl-0">
                                <div>Vida</div>
                                <div><input type="text" name="vida_atual" size="1" value="<?php echo $row['vida_atual']; ?>">/<?php echo $row['vida']; ?></div>
                            </div>
                            <div class="col-3 pl-0">
                                <div>Mana</div>
                                <div><input type="text" name="mana_atual" size="1" value="<?php echo $row['mana_atual']; ?>">/<?php echo $row['mana']; ?></div>
                            </div>
                            <div class="col-2 pl-0">
                                <div>CA</div>
                                <div><?php echo $row['armadura']; ?></div>
                            </div>
                            <div class="col-3 pr-0 pl-0">
                                <div>Inic</div>
                                <div>+<?php echo $row['iniciativa']; ?></div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6 text-left">
                                <input type="checkbox"><?php echo $row['arma'];?><br>
                                <input type="checkbox"><?php echo $row['arma2'];?><br>
                                <input type="checkbox"><?php echo $row['arma3'];?><br>
                                <input type="checkbox"><?php echo $row['arma4'];?><br>
                            </div>
                            <div class="col-6 text-left">
                                <?php $arma = $row['arma']; if($arma == "nenhuma"){echo "";}else{$sql = "SELECT * FROM armas WHERE nome_arma = '$arma'";$selecao = $con->query($sql); $dano =  $selecao->fetch_assoc(); echo $dano['dano'];}?><br>
                                <?php $arma = $row['arma2']; if($arma == "nenhuma"){echo "";}else{$sql = "SELECT * FROM armas WHERE nome_arma = '$arma'";$selecao = $con->query($sql);$dano =  $selecao->fetch_assoc(); echo $dano['dano'];}?><br>
                                <?php $arma = $row['arma3']; if($arma == "nenhuma"){echo "";}else{$sql = "SELECT * FROM armas WHERE nome_arma = '$arma'";$selecao = $con->query($sql);$dano =  $selecao->fetch_assoc(); echo $dano['dano'];}?><br>
                                <?php $arma = $row['arma4']; if($arma == "nenhuma"){echo "";}else{$sql = "SELECT * FROM armas WHERE nome_arma = '$arma'";$selecao = $con->query($sql);$dano =  $selecao->fetch_assoc(); echo $dano['dano'];}?><br>
                            </div>
                        </div>
                        <div class="row ml-0 px-0 mt-3">
                            <div class="col-6 px-0">
                                <button type="button" class="btn btn-primary ml-4" data-toggle="modal" data-target="#exampleModalLong">
                                    Equipamentos
                                </button>
                            </div>
                            <div class="col-6 px-0">
                                <button type="button" class="btn btn-primary ml-4" id="gravar">
                                    Gravar
                                </button>
                            </div>
                        </div>
                    </div>
                    </div> 
                </div>
            </div>
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Equipamentos e pericias de equipamentos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container">
                <div class="row mt-2">
                    <div class="col-12">
                    <div class="card-deck">    
                        <div class="card text-center"> 
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $row['nome']; ?></h5>
                        <h6 class="card-subtitle mb-4 text-muted"><?php echo $row['class']; ?>/<?php echo $row['nivel']; ?></h6>
                        <div class="row">
                            <div class="col-3 pr-4">
                                <div>CA</div>
                                <div><?php echo $row['armadura']; ?></div>
                            </div>
                            <div class="col-3 pr-4">
                                <div>Iniciativa</div>
                                <div>+<?php echo $row['iniciativa']; ?></div>
                            </div>
                            <div class="col-3 pr-4">
                                <div>Desl</div>
                                <div>+<?php echo $row['deslocamento']; ?></div>
                            </div>
                            <div class="col-3 pr-4">
                                <div>Bonus</div>
                                <div>+<?php echo $row['bonus']; ?></div>
                            </div>
                        </div>
                        <div class="row mt-4 text-left">
                            <div class="col-2 pl-0 pr-0">
                                <div>For:<?php echo $row['forca']; ?>(<?php echo floor(($row['forca']-10)/2); ?>)</div>
                                <div>Des:<?php echo $row['destreza']; ?>(<?php echo floor(($row['destreza']-10)/2); ?>)</div>
                                <div>Con:<?php echo $row['constituicao']; ?>(<?php echo floor(($row['constituicao']-10)/2); ?>)</div>
                                <div>Int:<?php echo $row['inteligencia']; ?>(<?php echo floor(($row['inteligencia']-10)/2); ?>)</div>
                                <div>Sab:<?php echo $row['sabedoria']; ?>(<?php echo floor(($row['sabedoria']-10)/2); ?>)</div>
                                <div>Car:<?php echo $row['carisma']; ?>(<?php echo floor(($row['carisma']-10)/2); ?>)</div>
                            </div>
                            <div class="col-5 pl-3 pr-0">
                                <div><input type="checkbox" <?php if($row['acrobacia']==1){echo "checked";}?>>Acrobacia(Des)</div>
                                <div><input type="checkbox" <?php if($row['ade_animais']==1){echo "checked";}?>>Ade Animais(Sab)</div>
                                <div><input type="checkbox" <?php if($row['arcanismo']==1){echo "checked";}?>>Arcanismo (Int)</div>
                                <div><input type="checkbox" <?php if($row['atletismo']==1){echo "checked";}?>>Atletismo (For)</div>
                                <div><input type="checkbox" <?php if($row['atuacao']==1){echo "checked";}?>>Atuação (Car)</div>
                                <div><input type="checkbox" <?php if($row['enganacao']==1){echo "checked";}?>>Enganação(Car)</div>
                                <div><input type="checkbox" <?php if($row['furtividade']==1){echo "checked";}?>>Furtividade (Des)</div>
                                <div><input type="checkbox" <?php if($row['historia']==1){echo "checked";}?>>História (Int)</div>
                                <div><input type="checkbox" <?php if($row['intimidacao']==1){echo "checked";}?>>Intimidação (Car)</div>
                            </div>
                            <div class="col-5 pl-1 pr-0">
                                <div><input type="checkbox" <?php if($row['intuicao']==1){echo "checked";}?>>Intuição (Sab)</div>
                                <div><input type="checkbox" <?php if($row['investigacao']==1){echo "checked";}?>>Investigação (Int)</div>
                                <div><input type="checkbox" <?php if($row['medicina']==1){echo "checked";}?>>Medicina (Sab)</div>
                                <div><input type="checkbox" <?php if($row['natureza']==1){echo "checked";}?>>Natureza (Int)</div>
                                <div><input type="checkbox" <?php if($row['percepcao']==1){echo "checked";}?>>Percepção (Sab)</div>
                                <div><input type="checkbox" <?php if($row['persuasao']==1){echo "checked";}?>>Persuasão (Car)</div>
                                <div><input type="checkbox" <?php if($row['prestidigitacao']==1){echo "checked";}?>>Prestidigitação (Des)</div>
                                <div><input type="checkbox" <?php if($row['religiao']==1){echo "checked";}?>>Religião (Int)</div>
                                <div><input type="checkbox" <?php if($row['sobrevivencia']==1){echo "checked";}?>>Sobrevivência (Sab)</div>
                            </div>
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php
 }
}
  $con->close();
?>