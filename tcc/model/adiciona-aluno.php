 <?php require_once("cabecalhoInicial.php"); 
require_once("banco-usuario.php"); 

$nome = $_POST['nome'];
$campus = $_POST['campus'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$tipoUsuario = $_POST['tipoUsuario'];
$semestre = $_POST['semestre'];
$curso = $_POST['curso'];

	if(insereAluno($conexao, $nome, $campus, $sexo, $email, $senha, $tipoUsuario, $semestre, $curso)) { ?>
		<div class="container">
			<br><br>
			<h5 class="black-text center-align light">O(a) Aluno(a) <?= $nome ?>, do <?= $semestre?>° semestre foi cadastrado no sistema VestCollege. Seja bem-vindo, por favor retorne à página inicial para efetuar sua autenticação.
			</h5><br>
			<a class="btn waves-effect waves-light center col s5 red" href="../index.php">Página de Autenticação</a></div><br>
	<?php } else { 
	$msg = mysqli_error($conexao);
?>
	<p class="alert">O Aluno <?= $nome ?> não foi adicionado: <?= $msg?> </p>
<?php
}
?>

<?php include("../rodapeInicial.php"); ?>
