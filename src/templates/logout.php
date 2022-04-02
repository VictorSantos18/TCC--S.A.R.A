<?
session_start();

//Remove usuario e senha das variaveis de sessoes
session_destroy();

header("location:login.php");



?>