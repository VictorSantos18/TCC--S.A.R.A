
<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <title>Alteração do Perfil</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <?php
                    include "conexao1.php";   
                    $id = $_POST['id'];   
                    $usuario = $_POST['usuario'];
                    $senha = $_POST['senha'];
                    $nome = $_POST['nome'];
                    $endereco = $_POST['endereco'];

                    $sql = "UPDATE `tb_alunos` set `usuario` = '$usuario', `senha`= '$senha', `nome` = '$nome', `endereco` = '$endereco' WHERE id = $id";

                    if (mysqli_query($conexao,$sql)) {
                        echo "$nome Seu perfil foi alterado com sucesso!";
                    } else
                        echo "$nome Perfil não alterado!";
                ?>
                 <a href="perfil.php" class="btn btn-primary">Voltar</a>
            </div>
        </div>


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
            crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
            integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
            integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
            crossorigin="anonymous"></script>
    </body>

</html>