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
        <title>Cardápio</title>
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
                <h2 class="titleText">Seu <span>C</span>ardápio</h2>
                <p>Aqui ficarão listados todos os alimentos!</p>
            </div>
            <?php
            
            include "conexao1.php";

            $sql = "SELECT * FROM tb_refeicoes";
            $dados = mysqli_query($conexao,$sql);
        ?>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Funções</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                $corfundo = 1;
                while ($linha = mysqli_fetch_assoc($dados)) {
                    $id_refeicoes = $linha['id_refeicoes'];
                    $titulo = $linha['titulo'];
                    $descricao = $linha['descricao'];
                    $preco = $linha['preco'];

                    //ALTERA A COR DO FUNDO DA TABELA PEGANDO O RESTO DA DIVISAO
                    $corfundo = $corfundo + 1;
                    if ( $corfundo % 2 == 0 ) {
                        $bgcolorfundo='#F0F0F0';
                    } else 
                        $bgcolorfundo='#F6F6F6';
                    
                    
                    echo "  
                    <form action='reserva.php' method='POST'>
                        <tr bgcolor='$bgcolorfundo'>
                            <th scope='row'>$titulo</th>
                            <td>$descricao</td>
                            <td>R$" . number_format($preco, 2, ',', '.') . "</td>
                          </select></td>
                            <td>
                                <a href='cadastro_edit.php?id=$id_refeicoes' class='btn btn-success btn-sm'>Editar</a>
                                <a href='#' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#confirma'
                                onclick=" .'"' ."pegar_dados($id_refeicoes, '$titulo')" .'"' .">Excluir</a>
                            </td>
                            
                        </tr>
                    </form>";
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
                <form action="excluir.php" method="POST">
                    <p>Deseja realmente excluir da sua lista:</p>
                    <p id="nome_registro">Nome do Registro ?</p> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                    <input type="hidden" name="titulo" id="nome_registro_1" value="">
                    <input type="hidden" name="id" id="id_refeicoes" value="">
                    <input type="submit" class="btn btn-primary" value="Sim">
                </div>
                </div>
            </div>
            </div>

            <script type="text/javascript">
        function pegar_dados(id, titulo) {
            document.getElementById('nome_registro').innerHTML = titulo;
            document.getElementById('nome_registro_1').value = titulo;
            document.getElementById('id_refeicoes').value = id;
            
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