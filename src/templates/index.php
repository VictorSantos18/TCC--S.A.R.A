<?php
   
session_start();

$bdServidor = 'etecdados.mysql.uhserver.com';
$bdUsuario = 'alunos2021';
$bdSenha = 'Pass2021@';
$bdBanco = 'etecdados';
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);


// VERIFICA SE USUARIO ESTA LOGADO!!!
if(isset($_SESSION['usuario'])) {

    //SESSAO DA VARIAVEL USUARIO E SENHA
    $usuario = $_SESSION['usuario'];
    $senha = $_SESSION['senha'];

    $sql = "SELECT * FROM tb_alunos WHERE usuario='$usuario' AND senha='$senha' ";//Monta o comando de busca
    $result = mysqli_query($conexao, $sql);//Executa o comando de busca e guarda os dados na variável $result

    while($ConsultaUsuario = mysqli_fetch_assoc($result)) {

        $NomeUsuario = $ConsultaUsuario['nome'];

    } 

} else {


header("location:Login.php");


}









?>
<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reservei - Sistema de Reservas Online</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    </head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d79201d5f1.js" crossorigin="anonymous"></script>

    <body>
    <style>
            header {
                z-index: 999;
                position: fixed;
                background: rgba(255, 255, 255, 0.1);
                top: 0;
                left: 0;
                width: 100%;
                padding: 15px 200px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                transition: 0.5s ease;
            }

            header.sticky {
                background: #3A3B3C;
                padding: 10px 200px;
            }

            header .brand {
                color: #fff;
                font-size: 1.8em;
                text-decoration: none;
            }

            header .navigation {
                position: relative;
            }

            header .navigation a {
                color: #fff;
                font-size: 1em;
                font-weight: 500;
                text-decoration: none;
                margin-left: 30px;
            }

            header .navigation a:hover {
                color: #ff0157;
            }

            header.sticky .navigation a:hover {
                color: #000;
            }

            @media (max-width: 1040px) {
                header {
                    padding: 12px 20px;
                }

                header.sticky {
                    padding: 10px 20px;
                }

                header .navigation {
                    display: none;
                }

                header .navigation.active {
                    z-index: 888;
                    position: fixed;
                    background: #fff;
                    top: 0;
                    right: 0;
                    width: 380px;
                    height: 100%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                    box-shadow: 0 5px 25px rgba(1 1 1 / 15%);
                    transition: 0.3s ease;
                }

                header .navigation a {
                    color: #000;
                    font-size: 1.2em;
                    margin: 10px;
                    padding: 0 20px;
                    border-radius: 20px;
                }

                header .navigation a:hover {
                    background: #ff0157;
                    color: #fff;
                    transition: 0.3s ease;
                }

                .menu-btn {
                    position: absolute;
                    background: url(img/menu.png)no-repeat;
                    background-size: 30px;
                    background-position: center;
                    width: 40px;
                    height: 40px;
                    right: 0;
                    margin: 0 20px;
                    cursor: pointer;
                    transition: 0.3s ease;
                }

                .menu-btn.active {
                    z-index: 999;
                    background: url(img/close.png)no-repeat;
                    background-size: 25px;
                    background-position: center;
                    transition: 0.3s ease;
                    filter: invert(1);
                }

                section {
                    padding: 80px 20px;
                }

                .main .content h2 {
                    font-size: 1em;
                }

                .animated-text h3 {
                    font-size: 2.2em;
                }

                .section-title {
                    font-size: 1.8em;
                }

                .about .content {
                    flex-direction: column;
                }

                .about .content .column {
                    position: relative;
                    width: 100%;
                }

                .about .content .col-right {
                    margin-top: 40px;
                }

                .skills .content {
                    flex-direction: column;
                }

                .skills .content .column {
                    position: relative;
                    width: 100%;
                }

                .skills .content .col-right {
                    margin-top: 40px;
                }

                .contact-form {
                    padding: 35px 40px;
                }
            }
        </style>
        <header>
            <a href="#" class="brand">S.A.R.A</a>
            <div class="menu-btn"></div>
            <div class="navigation">
                <a href="index.php">Início</a>
                <a href="sobre.php">Sobre</a>
                <a href="contato.php">Contate-Nos</a>
                <a href="logout.php">Sair</a>
            </div>
            <script>
                const menuBtn = document.querySelector(".menu-btn");
                const navigation = document.querySelector(".navigation");
                const navigationItems = document.querySelectorAll(".navigation a")

                menuBtn.addEventListener("click", () => {
                    menuBtn.classList.toggle("active");
                    navigation.classList.toggle("active");
                });

                navigationItems.forEach((navigationItem) => {
                    navigationItem.addEventListener("click", () => {
                        menuBtn.classList.remove("active");
                        navigation.classList.remove("active");
                    });
                });
            </script>
        </header>
        <style>
            .modal-header h5 {
                text-align: center;
                justify-content: center;
            }

            .modal-dialog {
                width: 350px;
            }
        </style>
        <?php
            $ConsultaUsuario = $_SESSION['usuario'];
            $sql = "SELECT * FROM tb_alunos WHERE usuario ='$ConsultaUsuario'";

            $result = mysqli_query($conexao, $sql);

            if ($result) {
                if (mysqli_num_rows($result)>0) {
                    while ($linha = mysqli_fetch_assoc($result)) {
                    }
                }
            }
        ?>
        <div class="modal fade" id="perfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user-alt"
                                style="font-size:40px"></i><br>Perfil</h5>
                                <label for="message-text" class="col-form-label" style="font-size: 18px;">Dados do
                            Usuário:</label>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nome:
                                    <?echo $NomeUsuario ?>
                                </label>
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label" >Usuário: <?echo $linha['usuario']; ?></label>

                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label" >Email: <?echo $linha['endereco']; ?></label>
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label" >Senha: <?echo $linha['senha']; ?></label>
                            </div>
                        </form>

                    </div>
        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <selection class="banner" id="banner">
            <div class="content">
                <h2>S.A.R.A</h2>
                <p>Se reservou, tá reservado! Sistema de reservas de pedidos de cantina online - Faça suas reservas de
                    maneira mais rápida, prática e sem mesmo sair da aula!!</p>
                    

            </div>
        </selection>
        <script type="text/javascript">
            window.addEventListener('scroll', function () {
                const header = document.querySelector('header');
                header.classList.toggle("sticky", window.scrollY > 0);
            });
        </script>
        <section class="Menu" id="Menu">
            <div class="title">
                <h2 class="titleText">Seu <span>C</span>ardápio</h2>
                <p>Escolha no cardápio abaixo os itens que você deseja fazer a reserva na cantina.</p>
            </div>
            <?php
                
                include "conexao1.php";

                $sql = "SELECT * FROM tb_refeicoes";
                $dados = mysqli_query($conexao,$sql);
            ?>
            <style>
                @media (max-width: 991px){
                    .table{
                        width: 20%;
                        font-size: 11px;
                    }
                }
            </style>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Reservar</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $corfundo = 1;
                    while ($linha = mysqli_fetch_assoc($dados)) {
                        $id = $linha['id'];
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
                                <td><select name='qtde' id='qtde' class='form-select'>
                                <option value='1' selected>1</option>
                                <option value='2'>2</option>
                                <option value='3'>3</option>
                                <option value='4'>4</option>
                                <option value='5'>5</option>
                                <option value='6'>6</option>
                                <option value='7'>7</option>
                                <option value='8'>8</option>
                                <option value='9'>9</option>
                                <option value='10'>10</option>
                              </select></td>
                                <td><input type='hidden' value='$titulo' name='titulo_refeicao'><input type='hidden' value='$NomeUsuario' name='nome_aluno'><input type='submit' class='btn btn-outline-danger' width='100px' value='Reservar'></td>
                            </tr>
                        </form>";
                    }

                    ?>

                </tbody>
            </table>
            </div>
            </div>
        </section>
        <style>
             .footer{
            background: #3A3B3C;
            color: #fff;
            text-align: center;
            padding: 1em;
            }

            .footer .footer-title{
            font-size: 16px;
            font-weight: 600;
            }

            .footer p{
            font-size: 15px;
            margin-top: 10px;
            }

            .footer p a{
            color: #ff0157;
            font-weight: 600;
            font-size: 18px;
            text-decoration: none;
            }
        </style>
         <footer class="footer">
      <span class="footer-title">Etec Ilza Nascimento Pintus</span>
      <p>Copyright @2021 <a href="#">Projeto S.A.R.A</a>. Todos os direitos reservados.</p>
    </footer>







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