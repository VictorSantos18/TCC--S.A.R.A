<?php

$bdServidor = 'etecdados.mysql.uhserver.com';
$bdUsuario = 'alunos2021';
$bdSenha = 'Pass2021@';
$bdBanco = 'etecdados';
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if ( $conexao = mysqli_connect ($bdServidor,$bdUsuario,$bdSenha,$bdBanco) ) {
    //echo "Conectado!";
    
} else 
    echo "Erro";


if (!mysqli_set_charset($conexao, 'utf8')) {
    printf('Error ao usar utf8: %s', mysqli_error($conexao));
    exit;
}
    


?>