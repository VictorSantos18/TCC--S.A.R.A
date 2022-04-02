<?php

session_start();

$bdServidor = 'etecdados.mysql.uhserver.com';
$bdUsuario = 'alunos2021';
$bdSenha = 'Pass2021@';
$bdBanco = 'etecdados';
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
//Na função mysqli_connect especificamos o servidor, usuario, senha e nome do banco de dados

$usuario = $_POST["usuario"];//Pega o valor da caixa de texto
$senha = $_POST["senha"];//Pega o valor da caixa de texto

$sql = "SELECT * FROM tb_alunos WHERE usuario='$usuario' AND senha='$senha' ";//Monta o comando de busca
$result = mysqli_query($conexao, $sql);//Executa o comando de busca e guarda os dados na variável $result




if (mysqli_num_rows($result)==0)
{
//Remove usuario e senha das variaveis de sessoes
unset ($_SESSION['usuario']);
unset ($_SESSION['senha']);

echo 'Usuario ou senha nao encontrado!<br>';
echo "<a href='javascript:history.back()'>VOLTAR</a>";

}
else

{



$_SESSION['usuario'] = $usuario;
$_SESSION['senha'] = $senha;


header("location: ./index.php");

//echo 'Seja bem vindo Sessao: <b>'. $_SESSION['usuario'] . '</b>';

die();
}

?>