<?php require_once ("cabecalhoInicial.php");?>

	<main>
		<div class="container">
			<div class="section">
				<div class="row">
					<div class="col s12 m6">
						<div class="icon-block">
							<h2 class="center teal-text text-lighten-3"><i class="material-icons blue-grey-text text-darken-1">mode_edit</i></h2>
							<h5 class="center"><a href="cadastroAluno.php" class="teal-text text-darken-4" style="font-family: Lobster;">Para cadastrar Aluno Clique Aqui</a></h5>

							<p class="light center-align teal-text text-darken-4" style="font-size: 18px;">O aluno é o principal participante deste sistema já que será ele o escritor do texto. Neste sistema não faltarão dicas para que ele consiga fazer uma excelente produção textual.</p>
						</div>
					</div>
	
					<div class="col s12 m6">
						<div class="icon-block">
							<h2 class="center teal-text text-lighten-3"><i class="material-icons blue-grey-text text-darken-1">grade</i></h2>
							<h5 class="center"><a href="cadastroProfessor.php" class="teal-text text-darken-4" style="font-family: Lobster;">Para cadastrar Professor Clique Aqui</a></h5>

							<p class="light center-align teal-text text-darken-4" style="font-size: 18px;">O professor tem papel fundamental dentro do sistema, pois é ele que fará as correções de coerência e coesão dos textos para que o aluno consiga enxergar os erros e melhorar ainda mais os seus textos.</p>
						</div>
					</div>
				</div>
				<div class="row">
                    <div class="col s4">
                        <a href="index.php"><i class="material-icons medium">keyboard_backspace</i></a>
                    </div>
                </div>
			</div>
		</div>

		<div class="fixed-action-btn horizontal click-to-toggle">
			<a class="btn-floating btn-large red">
				<i class="material-icons">menu</i>
			</a>
			<ul>
				<li><a class="btn-floating red" href="index.html"><i class="material-icons">mode_edit</i></a></li>
				<li><a class="btn-floating yellow darken-1" href="cadastroAluno/cadastroAluno.html"><i class="material-icons">view_headline</i></a></li>
				<li><a class="btn-floating green" href="loginDeUsuario/paginaLogin.html"><i class="material-icons">shop</i></a></li>
				<li><a class="btn-floating blue" href="cadastroProfessor/cadastroProfessor.html"><i class="material-icons">supervisor_account</i></a></li>
			</ul>
		</div>
	</main>

<?php include ("rodapeInicial.php");?>