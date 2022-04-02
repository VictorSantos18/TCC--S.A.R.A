<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
            integrity="undefined" crossorigin="anonymous">
        <link rel="stylesheet" href="styleadm.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Pedidos</title>
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
       
    <section class="Menu" id="Menu">
            <div class="title">
                <br>
                <h2 class="titleText">Seus <span>P</span>edidos</h2>
                <p>Aqui ficarão listados todos os pedidos feitos!</p>
            </div>
            <?php
            
            include "conexao1.php";

            $sql = "SELECT * FROM tb_pedidos ORDER by id DESC";
            $dados = mysqli_query($conexao,$sql);
        ?>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Alimento</th>
                        <th scope="col">Status</th>
                        <th scope="col">Nome do Usuario</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Função</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                $corfundo = 1;
                while ($linha = mysqli_fetch_assoc($dados)) {
                    $id = $linha['id'];
                    $id_refeicao = $linha['id_refeicao'];
                    $pedido_status = $linha['pedido_status'];
                    $nome_aluno = $linha['nome_aluno'];
                    $qtde = $linha['qtde'];

                    //ALTERA A COR DO FUNDO DA TABELA PEGANDO O RESTO DA DIVISAO
                    $corfundo = $corfundo + 1;
                    if ( $corfundo % 2 == 0 ) {
                        $bgcolorfundo='#F0F0F0';
                    } else 
                        $bgcolorfundo='#F6F6F6';
                    
                    
                    echo "  
                        <tr bgcolor='$bgcolorfundo'>
                            <th scope='row'>$id_refeicao</th>
                            <td>$pedido_status</td>
                            <td>$nome_aluno</td>
                            <td>$qtde</td>
                          </select></td>
                            <td>
                                <a href='#' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#confirma'
                                onclick=" .'"' ."pegar_dados($id, '$nome_aluno')" .'"' .">Excluir</a>
                            </td>
                            
                        </tr>";
                }

                ?>

                </tbody>
            </table>
            </div>
            </div>
          <!-- Modal -->
          <div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmação de Exclusão</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="excluir_pedido.php" method="POST">
                    <p>Deseja realmente excluir o pedido de:</p>
                    <p id="nome_registro">Nome do Registro</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                    <input type="hidden" name="nome_aluno" id="nome_registro_1" value="">
                    <input type="hidden" name="id" id="id" value="">
                    <input type="submit" class="btn btn-primary" value="Sim">
                </div>
                </div>
            </div>
            </div>

            <script type="text/javascript">
        function pegar_dados(id, nome_aluno) {
            document.getElementById('nome_registro').innerHTML = nome_aluno;
            document.getElementById('nome_registro_1').value = nome_aluno;
            document.getElementById('id').value = id;
            
        }
        </script>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
            crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
            integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
            integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
            crossorigin="anonymous"></script>
        </section>
        
    </body>

</html>