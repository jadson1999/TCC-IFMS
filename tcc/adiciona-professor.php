 <?php require_once("cabecalhoInicial.php"); 
require_once("banco-usuario.php"); 

$nome = $_POST['nome'];
$campus = $_POST['campus'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$tipousuario = $_POST['tipoUsuario'];
$siape = $_POST['siape'];
$formacao = $_POST['formacao'];

	if(insereProfessor($conexao, $nome, $campus, $sexo, $email, $senha, $tipousuario, $siape, $formacao)) { ?>
		<p class="alert">O Professor <?= $nome ?>, foi adicionado. </p>
	<?php } else { 
	$msg = mysqli_error($conexao);
?>
	<p class="alert">O Professor <?= $nome ?> não foi adicionado: <?= $msg?> </p>
<?php
}
?>

<?php include("rodapeInicial.php"); ?>
