<?php require_once ("cabecalhoInicial.php"); 
require_once("banco-usuario.php");

if(array_key_exists("removido", $_GET) && $_GET["removido"] == true){
	?>
	<p>Removido com Sucesso.</p>
	<?php } ?>

	<div class="container">
	<table class="centered bordered">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Semestre</th>
					<th>Curso</th>
					<th>Campus</th>
					<th>Remover Aluno</th>
				</tr>
			</thead>
			<?php
			$alunos = listaAlunos($conexao);
			foreach($alunos as $aluno) :
				?>

			<tbody>
				<tr>
					<th class="center-align"><?= $aluno['nome'] ?></th>
					<th class="center-align"><?= $aluno['semestre'] ?></th>
					<th class="center-align"><?= $aluno['curso'] ?></th>
					<th class="center-align"><?= $aluno['campus'] ?></th>
					<th class="center-align">
						<form action="remove-aluno.php" method="post">
							<input type="hidden" name="idusuario" value="<?=$aluno['idusuario']?>" />
							<button class="btn waves-effect red">remover</button>
						</form>
					</th>
				</tr>
			</tbody>

			<?php
			endforeach
			?>
		</table>
	</div>

	<?php include("rodapeInicial.php"); ?>   




