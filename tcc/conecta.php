<?php
	define("HOST", "localhost");
    define("USUARIO", "root");
    define("SENHA", "");
    define("BANCODADOS", "bancodados");

    function getConnect(){
        $conexao = mysqli_connect(HOST, USUARIO, SENHA);
        mysqli_select_db($conexao , BANCODADOS);
        return $conexao;
    }

    $conexao = getConnect();


