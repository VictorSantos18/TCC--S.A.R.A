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
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

        <title>Sobre o Projeto</title>
        <!-- Bootstrap CSS -->
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
        <section class="Sobre" id="Sobre">
            <div class="row">
                <div class="col50">

                    <br><br>
                    <h2 class="titleText"><span>S</span>obre o Projeto</h2>
                    <p>Criado em 2021 como um projeto de TCC pelos alunos do Centro Paula Souza na Escola Técnica e
                        Estadual de São José dos Campos,
                        o projeto S.A.R.A foi desenvolvido para resolver os
                        problemas
                        de logística e de filas nas
                        depêndecias da ETEC através de um sistema ágil
                        que organiza reservas de comida da cantina.<br><br>Nossa
                        missão é projetar um sistema que contribui para com as escolas técnicas e seus alunos,
                        fazendo
                        com que o tempo que seria gasto de modo desnecessário em reservas manuais e em longas filas
                        seja
                        poupado. Nosso projeto tem como foco príncipal, a redução em massa de filas na escola, em
                        prol
                        de um ambiente mais organizado e de melhor e mais facil acesso.</p>
                </div>
                <div class="col50">
                    <div class="imgBx">
                        <img src="./img/img1.jpg">
                    </div>
                </div>
            </div>
            </div>
        </section>
        <style>
            .content {
                display: flex;
                justify-content: center;
                flex-direction: row;
                flex-wrap: wrap;
                margin-top: 20px;
            }

            .content .card {
                width: 340px;
                margin: 15px;
            }

            .content .card .card-img {
                position: relative;
                width: 100%;
                height: 450px;
                overflow: hidden;
                border-radius: 10px;
            }

            .content .card .card-img img {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
                border-radius: 10px;
                transition: 0.5s ease;
            }

            .content .card .card-img img:hover {
                transform: scale(1.1);
            }

            .content .card .details {
                position: absolute;
                bottom: 0px;
                left: 0;
                padding: 10px;
                box-sizing: border-box;
                background: rgba(0, 0, 0, .9);
                width: 100%;
                transition: .5s;
            }

            .content .card:hover .details {
                bottom: 0;
            }

            .content .card .details h2 {
                margin: 0;
                padding: 0;
                color: #fff;
                font-size: 17px;
                font-weight: 100;
                text-align: center;
                text-transform: uppercase;

            }

            .content .card .details h2 span {
                margin: 0;
                padding: 0;
                font-size: 14px;
                color: #ff0157;
                font-weight: 900;
                text-transform: uppercase;
                position: relative;
                top: -6px;
            }

            .content .card .details ul {
                margin: 0;
                padding: 0;
                display: flex;
                float: right;
            }

            .content .card .details ul li {
                list-style: none;
                padding: 0 10px;
            }

            .row .column .details ul li a {
                padding: 0 10px;
                color: #fff;
            }

            .content .card .details ul li a .fa {
                transition: .5s;
            }

            .content .card .details ul li a:hover .fa {
                transform: rotateY(360deg);
                color: #ff0157;
            }
        </style>
        <section class="testimonials" id="testimonials">
            <div class="title white">
                <h3 class="titleText">Quem <span>S</span>omos nós:</h3>
                <p>Conheça um pouco sobre os integrantes do grupo.</p>
            </div>
            <div class="content">
                <div class="card reveal">
                    <div class="card-img">
                        <img src="img/vitaao.jpg" alt="">
                    </div>
                    <div class="details">
                        <h2>Víctor dos Santos Salles<br><span>Desenvolvedor e Designer</span></h2>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card reveal">
                    <div class="card-img">
                        <img src="img/mariliaa.jpg" alt="">
                    </div>
                    <div class="details">
                        <h2>Marília Borgo de Moraes<br><span>Desenvolvedora do Back End</span></h2>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card reveal">
                    <div class="card-img">
                        <img src="img/lucas.jpg" alt="">
                    </div>
                    <div class="details">
                        <h2>Lucas Vinícius da Silva Soares<br><span>Produtor</span></h2>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card reveal">
                    <div class="card-img">
                        <img src="img/kawan.jpg" alt="">
                    </div>
                    <div class="details">
                        <h2>Kawan Rodrigues de Paula<br><span>Produtor e Designer</span></h2>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card reveal">
                    <div class="card-img">
                        <img src="img/samuel.jpg" alt="">
                    </div>
                    <div class="details">
                        <h2>Samuel Lucas Ribeiro <br><span>Designer</span></h2>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            <div style="clear:both;"></div>
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
    </body>

</html>