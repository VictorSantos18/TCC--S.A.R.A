<?php

$bdServidor = 'etecdados.mysql.uhserver.com';
$bdUsuario = 'alunos2021';
$bdSenha = 'Pass2021@';
$bdBanco = 'etecdados';
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

$titulo_refeicao = $_POST["titulo_refeicao"];//Pega o valor do titulo da refeição
$nome_aluno = $_POST["nome_aluno"];//Pega o valor do nome do aluno
$qtde = $_POST["qtde"];//Pega a quantidade selecionada

$query ="INSERT INTO tb_pedidos (id_refeicao, pedido_status, nome_aluno, qtde) VALUES ('$titulo_refeicao', 1, '$nome_aluno', '$qtde' )";
$query_run =mysqli_query($conexao, $query);



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d79201d5f1.js" crossorigin="anonymous"></script>

    <title>Refeição cadastrada com sucesso!</title>
  </head>
  <body>
 
  <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Tudo certo!</h4>
  <p><?php echo $nome_aluno?>, a sua refeição foi cadastrada com sucesso! Se desejar, você pode retornar e reservar outras opções.</p>
  <hr>
  <p class="mb-0">Refeição escolhida: <?php echo $titulo_refeicao?></p>
  <p class="mb-0">Quantidade escolhida: <?php echo $qtde?></p>

    </br></br>
  <p class="mb-0"><i class="fas fa-arrow-left"></i>&nbsp;<a href="javascript:history.back()">voltar</a></p>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>






