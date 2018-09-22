<?php require_once("cabecalhoInicial.php"); 
require_once("banco-usuario.php");

$idusuario = $_POST['idusuario'];
removeAluno($conexao, $idusuario);
header("Location: aluno-lista.php");
die();
?>
