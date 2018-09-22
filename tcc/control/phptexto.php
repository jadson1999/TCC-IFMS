<?php include 'cabecalho.php'; ?>
<div id="producao" class="col s8">
	<div id="menor">
		<div id="titulo">
			<h5 class="center-align black-text"><?php ini_set('display_errors', 1);
				ini_set('display_startup_errors', 1);
				error_reporting(E_ALL);
				if(isset($_POST['titulo'])){

					echo $_POST['titulo'] . ' ';
				}?>
			</h5><br>
			<h6 class="black-text">
				<?php ini_set('display_errors', 1);
				ini_set('display_startup_errors', 1);
				error_reporting(E_ALL);

				if(isset($_POST['introducao'])) {

					echo $_POST['introducao'] . ' ';
				}?>
			</h6>
			<h6 class="black-text">
				<?php ini_set('display_errors', 1);
				ini_set('display_startup_errors', 1);
				error_reporting(E_ALL);

				if(isset($_POST['argumento1'])) {

					echo $_POST['argumento1'] . ' ';
				}?>
			</h6>
			<h6 class="black-text">
				<?php ini_set('display_errors', 1);
				ini_set('display_startup_errors', 1);
				error_reporting(E_ALL);

				if(isset($_POST['argumento2'])) {

					echo $_POST['argumento2'] . ' ';
				}?>
			</h6>
			<h6 class="black-text">
				<?php ini_set('display_errors', 1);
				ini_set('display_startup_errors', 1);
				error_reporting(E_ALL);

				if(isset($_POST['argumento3'])) {

					echo $_POST['argumento3'] . ' ';
				}?>
			</h6>
			<h6 class="black-text">
				<?php ini_set('display_errors', 1);
				ini_set('display_startup_errors', 1);
				error_reporting(E_ALL);

				if(isset($_POST['conclusao'])) {

					echo $_POST['conclusao'] . ' ';
				}?>
			</h6>
		</div>
		<div class="row">
			<div class="col s12 center">
				<br>
				<a class="btn waves-effect waves-light red" type="button" value="Enviar2" onclick="envia('cadastroAluno.php')">
					<i class="material-icons right">send</i>Guardar Informações
				</a>
			</div>
		</div>
	</div>
</div>

<?php include 'rodape.php';?>
