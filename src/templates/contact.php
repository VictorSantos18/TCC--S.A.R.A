<?php



$bdServidor = 'etecdados.mysql.uhserver.com';
$bdUsuario = 'alunos2021';
$bdSenha = 'Pass2021@';
$bdBanco = 'etecdados';
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
//Na função mysqli_connect especificamos o servidor, usuario, senha e nome do banco de dados


$nome_aluno = $_POST["nome_aluno"];//Pega o valor da caixa de texto
$email = $_POST["email"];//Pega o valor da caixa de texto
$msg = $_POST["msg"];//Pega o valor da caixa de texto

$sql = "insert into tb_contato (nome_aluno, email, msg) values('$nome_aluno','$email', '$msg')";//Monta o comando Sql

$result = mysqli_query($conexao, $sql);



if (mysqli_query($conexao,$sql)) {
    echo "Mensagem enviada com sucesso!",'success';
} else
    echo "Mensagem não enviada!",'danger';
//echo "<a href='javascript:history.back()'>Voltar</a>";
echo "<a href='contato.php' class='btn btn-primary'>Voltar</a>";

?>