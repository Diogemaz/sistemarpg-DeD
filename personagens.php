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
                    <div class="col-6">
                    <div class="card-deck">    
                        <div class="card text-center"> 
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $row['nome']; ?></h5>
                        <h6 class="card-subtitle mb-4 text-muted"><?php echo $row['class']; ?>/<?php echo $row['nivel']; ?></h6>
                        <div class="row">
                            <div class="col-3 pr-5">
                                <div>CA</div>
                                <div><?php echo $row['armadura']; ?></div>
                            </div>
                            <div class="col-3 pr-5">
                                <div>Iniciativa</div>
                                <div>+<?php echo $row['iniciativa']; ?></div>
                            </div>
                            <div class="col-3 pr-5">
                                <div>Desl</div>
                                <div>+<?php echo $row['deslocamento']; ?></div>
                            </div>
                            <div class="col-3 pr-5">
                                <div>Bonus</div>
                                <div>+<?php echo $row['bonus']; ?></div>
                            </div>
                        </div>
                        <div class="row mt-4 text-left">
                            <div class="col-3">
                                <div>For:<?php echo $row['forca']; ?>(<?php echo floor(($row['forca']-10)/2); ?>)</div>
                                <div>Des:<?php echo $row['destreza']; ?>(<?php echo floor(($row['destreza']-10)/2); ?>)</div>
                                <div>Con:<?php echo $row['constituicao']; ?>(<?php echo floor(($row['constituicao']-10)/2); ?>)</div>
                                <div>Int:<?php echo $row['inteligencia']; ?>(<?php echo floor(($row['inteligencia']-10)/2); ?>)</div>
                                <div>Sab:<?php echo $row['sabedoria']; ?>(<?php echo floor(($row['sabedoria']-10)/2); ?>)</div>
                                <div>Car:<?php echo $row['carisma']; ?>(<?php echo floor(($row['carisma']-10)/2); ?>)</div>
                            </div>
                            <div class="col-4">
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
                            <div class="col-5">
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
                        <div class="row ml-5 mt-3">
                            <button type="button" class="btn btn-primary ml-3" data-toggle="modal" data-target="#exampleModalLong">
                                Equipamentos e pericias de equipamentos
                            </button>
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
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Equipamentos</h5>
            <p class="card-text"><?php echo $row['itens'];?></p>
        </div>
        <ul class="list-group list-group-flush">
            <h5 class="card-title ml-4">Armas</h5>
            <li class="list-group-item"><?php echo $row['arma'];?></li>
            <li class="list-group-item"><?php echo $row['arma2'];?></li>
            <li class="list-group-item"><?php echo $row['arma3'];?></li>
            <li class="list-group-item"><?php echo $row['arma4'];?></li>
        </ul>
        <ul class="list-group list-group-flush">
            <h5 class="card-title ml-4">Armadura</h5>
            <li class="list-group-item"><?php echo $row['armadura_atual'];?></li>
        </ul>
        <div class="card-body">
            <h5 class="card-title">Pericia de equipamentos</h5>
            <p class="card-text"><?php echo $row['equipamento'];?></p>
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