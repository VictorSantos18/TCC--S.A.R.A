<?php

include 'conexao1.php';

if (isset($_POST["cadastrar"])) {
    $usuario = mysqli_real_escape_string($conexao, $_POST["usuario"]);//Pega o valor da caixa de texto
    $senha = mysqli_real_escape_string($conexao, $_POST["senha"]);//Pega o valor da caixa de texto
    $nome = mysqli_real_escape_string($conexao, $_POST["nome"]);//Pega o valor da caixa de texto
    $email = mysqli_real_escape_string($conexao, $_POST["email"]);//Pega o valor da caixa de texto

$sql = "INSERT INTO tb_alunos (usuario, senha, nome, email) VALUES ('$usuario','$senha', '$nome', '$email')";//Monta o comando Sql

$result = mysqli_query($conexao, $sql);//Executa o comando especificando os dados da conexão e o comando sql

    if ($result) {
        echo "<script>alert('Usuário cadastrado com sucesso!');</script>";
    } else {
        echo "<script>alert('Usuário não cadastrado');</script>";
    }
}
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Cadastro do Usuário</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>

        <style>
            * {
                margin: 0;
                padding: 0;
                text-decoration: none;
                box-sizing: border-box;
            }

            body {
                min-height: 100vh;
                background: url(./img/bg2.jpg);
            }

            .Login-form {
                width: 300px;
                background: #f1f1d1;
                height: 550px;
                padding: 80px 40px;
                border-radius: 10px;
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
            }

            .Login-form h2 {
                text-align: center;
                margin-bottom: 10px;
            }

            .txtb {
                border-bottom: 2px solid #adadad;
                position: relative;
                margin: 30px 0;
            }

            .txtb input {
                font-size: 15px;
                color: #333;
                border: none;
                width: 100%;
                outline: none;
                background: none;
                padding: 0 5px;
                height: 40px;
            }

            .txtb span::before {
                content: attr(data-placeholder);
                position: absolute;
                top: 50%;
                left: 5px;
                color: #adadad;
                transform: translateY(-50%);
                z-index: -1;
                transition: .5s;
            }

            .txtb span::after {
                content: '';
                position: absolute;
                width: 0%;
                height: 2px;
                background: #ff0157;
                transition: .5s;
            }

            .focus * span::before {
                top: -5px;
            }

            .focus * span::after {
                width: 100%;
            }

            .logbtn {
                display: block;
                width: 100%;
                height: 50px;
                border: none;
                background: #ff0157;
                background-size: 200%;
                color: #fff;
                outline: none;
                cursor: pointer;
                transition: .5s;
            }

            .logbtn:hover {
                background-position: right;
            }

            .botton-text {
                margin-top: 40px;
                text-align: center;
                font-size: 13px;
            }
        </style>

        <body>

            <form method="POST" action="" class="Login-form">

                <h2>Cadastro</h2>
                <div class="txtb">
                    <input type="text" name="nome" placeholder="Nome Completo"required>
                </div>

                <div class="txtb">
                    <input type="text" name="usuario" placeholder="Usuario"required>
                </div>

                <div class="txtb">
                    <input type="text" name="email" placeholder="Email"required>
                </div>

                <div class="txtb">
                    <input type="text" name="senha" placeholder="Senha"required>
                </div>

                <input type="submit" class="logbtn" name="cadastrar" value="Cadastrar">

                <div class="botton-text">
                    Já possui uma conta? <a href="Login.php">Entrar</a>
                </div>

            </form>
            <script type="text/javascript">
                $(".txtb input").on("focus", function () {
                    $(this).addClass("focus");
                });

                $(".txtb input").on("blur", function () {
                    if ($(this).val() == "")
                        $(this).removeClass("focus");
                });
            </script>


        </body>

</html>
