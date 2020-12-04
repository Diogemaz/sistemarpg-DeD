
$(document).ready(function(){
    $("#resultado").on('click', function(){
        var personagem = $('#persRodada').val();
        var habilidade = $('#habilidade').val();
        var dado = $('#dado').val();
        if(dado > 0){
            var valorTirado = Math.floor(Math.random() * 20 + 1);
            $('#resultadoDado').text("Dado: "+valorTirado);
        }else{
            var valorTirado = $('#valorTirado').val();
        }
        var pericia = $('#pericia').val();
        console.log(habilidade,dado,valorTirado,pericia);
        $.ajax({
            type:'POST',
            url:'resultadoDado.php',
            dataType: "json",
            data:{
                habilidade: habilidade,
                dado: dado,
                pericia: pericia,
                valorTirado: valorTirado,
                personagem: personagem
            },
            success:function(data){
                $('#mostrarResultado').text("Resultado final: "+data.valor);
                console.log("Funcionou"+data.valor+personagem);
            },
            error: function(data){
                console.log("erro"+data.erro);
            }
        });
    });
});