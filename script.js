
$(document).ready(function(){
    $("#resultado").on('click', function(){
        var personagem = $('#persRodada').val();
        var habilidade = $('#habilidade').val();
        var dado = $('#dado').val();
        var valorTirado = $('#valorTirado').val();
        console.log(habilidade,dado,valorTirado);
        $.ajax({
            type:'POST',
            url:'resultadoDado.php',
            dataType: "json",
            data:{
                habilidade: habilidade,
                dado: dado,
                valorTirado: valorTirado,
                personagem: personagem
            },
            success:function(data){
                $('#mostrarResultado').text("Resultado "+data.valor);
                console.log("Funcionou"+data.valor+personagem);
            },
            error: function(data){
                console.log("erro"+data.erro);
            }
        });
    });
});