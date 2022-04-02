
<!DOCTYPE html>
<html>

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
            height: 500px;
            padding: 80px 40px;
            border-radius: 10px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .Login-form h2 {
            text-align: center;
            margin-bottom: 60px;
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
            margin-top: 60px;
            text-align: center;
            font-size: 13px;
        }
        @media (min-width: 991px)
        {
            .Login-form {
            left: 50%;
            top: 50%;
        }
        }
    </style>

    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <form method="post" action="gravalogin.php" class="Login-form">
            <h2>Login</h2>
            <div class="txtb">
                <input type="text" name="usuario" placeholder="Usuario" required>
            </div>

            <div class="txtb">
                <input type="text" name="senha" placeholder="Senha" required>
            </div>

            <input type="submit" class="logbtn" value="Entrar">

            <div class="botton-text">
                Não possui uma conta ainda? <a href="Cadastro.php">Cadastre-se</a>
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