<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
          <link rel="stylesheet" href="styleadm.css">

        <title>Cadastro de Alimentos</title>
    </head>

    <body>
    <input type="checkbox" name="" checked="checked">
        <span class="icon"></span>
        <ul>
            <li><a href="index-adm.php">Inicio</a></li>
            <li><a href="cardapio.php">Cardápio</a></li>
            <li><a href="cadastrar_alimentos.php">Cadastrar Alimentos</a></li>
            <li><a href="pedidos.php">Pedidos</a></li>
            <li><a href="contact.php">Fale Conosco</a></li>
        </ul>

    <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Cadastro</h1>
                    <form action="cadastro1.php" method="post">
                        <div class="form-group">
                            <label for="nome" class="form-label">Nome do Alimento</label>
                            <input type="text" class="form-control" name="titulo">
                        </div>
                        <div class="form-group">
                            <label for="endereco" class="form-label">Descrição do Alimento</label>
                            <input type="text" class="form-control" name="descricao">
                        </div>
                        <div class="form-group">
                            <label for="telefone" class="form-label">Preço</label>
                            <input type="text" class="form-control" name="preco">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>



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