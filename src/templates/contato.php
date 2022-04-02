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
<!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

        <title>Fale Conosco</title>
    </head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d79201d5f1.js" crossorigin="anonymous"></script>

    </head>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <body>
    <style>
            header {
                z-index: 999;
                position: fixed;
                background: #3A3B3C;
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
                                <label for="message-text" class="col-form-label">Usuário:</label>

                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Email:</label>
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Senha:</label>
                            </div>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <?php

            include 'conexao1.php';

            if (isset($_POST["enviar"])) {
                $nome_aluno = $_POST["nome_aluno"];//Pega o valor da caixa de texto
                $email = $_POST["email"];//Pega o valor da caixa de texto
                $msg = $_POST["msg"];//Pega o valor da caixa de texto

                $sql = "insert into tb_contato (nome_aluno, email, msg) values('$nome_aluno','$email', '$msg')";
                $result = mysqli_query($conexao, $sql);//Executa o comando especificando os dados da conexão e o comando sql

                if ($result) {
                    echo "<script>alert('Mensagem enviada com sucesso!');</script>";
                } else {
                    echo "<script>alert('Mensagem não enviada.');</script>";
                }
            }
        ?>
        <section class="contact" id="contact">
            <form action="" method="POST">
                <div class="title">
                    <br><br>
                    <h2 class="titleText"><span>F</span>ale Conosco</h2>
                    <h5>Envie-nos uma mensagem, caso algo de errado aconteça.</h5>
                </div>
                <div class="contactForm">
                    <h3>Envie uma Mensagem</h3>
                    <div class="inputBox">
                        <input type="text" name="nome_aluno" placeholder="Nome" required>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="email" placeholder="Email" required>
                    </div>
                    <div class="inputBox">
                        <textarea name="msg" placeholder="Digite aqui:" required></textarea>
                    </div>
                    <div class="inputBox">
                        <input type="submit" class="logbtn" name="enviar" value="Enviar">
                    </div>
            </form>
        </section>

        <style>
            .footer{
                margin-top: 50px;
            background: #3A3B3C;
            color: #fff;
            text-align: center;
            padding: 2em;
            }

            .footer .footer-title{
            font-size: 15px;
            font-weight: 600;
            }

            .footer p{
            font-size: 16px;
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