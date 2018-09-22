<?php
require_once("conecta.php"); 

function listaAlunos($conexao) {
    $alunos = [];
    $resultado = mysqli_query($conexao, "select * from aluno");
	while ($aluno = mysqli_fetch_assoc($resultado)){
		   array_push($alunos, $aluno);
    }
    return $alunos;
}		

function insereAluno($conexao, $nome, $campus, $sexo, $email, $senha, $tipoUsuario, $semestre, $curso) {
    $query = "insert into aluno (nome, campus, sexo, email, senha, tipousuario, semestre, curso) values ('{$nome}', '{$campus}', '{$sexo}', '{$email}', '{$senha}', '{$tipoUsuario}', {$semestre}, '{$curso}')";
    return mysqli_query($conexao, $query);
}

function insereProfessor($conexao, $nome, $campus, $sexo, $email, $senha, $tipousuario, $siape, $formacao) {
    $query = "insert into professor (nome, campus, sexo, email, senha, tipousuario, siape, formacao) values ('{$nome}', '{$campus}', '{$sexo}', '{$email}', '{$senha}', '{$tipousuario}', '{$siape}', '{$formacao}')";
    return mysqli_query($conexao, $query);
}

function removeAluno($conexao, $idusuario) {
    $query = "delete from aluno where idusuario = {$idusuario}";
    return mysqli_query($conexao, $query);
}