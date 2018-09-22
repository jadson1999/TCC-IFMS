<?php 
require_once("banco-usuario.php");
require_once("logica-usuario.php");

if(isset($_POST)){        
	if(isset($conexao)){
		$usuario = buscaAluno($conexao, $_POST["email"], $_POST["senha"]);
		if($usuario == null) {
			$_SESSION["danger"] = "Usuário ou senha inválida.";
			header("Location: paginaLogin.php");
		}else{
			$_SESSION['tipousuario'] = "aluno";
			$_SESSION["success"] = "Usuario logado com sucesso";
			logaUsuario($usuario["email"]);
			header("Location: home.php");
		}
	}	

	if(isset($conexao)){
		$usuario = buscaProfessor($conexao, $_POST["email"], $_POST["senha"]);
		if($usuario == null) {
			$_SESSION["danger"] = "Usuário ou senha inválida.";
			header("Location: paginaLogin.php");
		}else{
			$_SESSION['tipousuario'] = "professor";
			$_SESSION["success"] = "Usuario logado com sucesso";
			logaUsuario($usuario["email"]);
			header("Location: paginaLogin.php");
		}
	}
}		
die();



