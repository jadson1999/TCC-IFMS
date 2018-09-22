<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    session_start();
    include_once "conecta.php";
    
    if(isset($_POST)){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        if(isset($conexao)){
            $stmt = mysqli_prepare($conexao,"select email from aluno where email = ? and senha = ?");
            mysqli_stmt_bind_param($stmt, "ss", $email, $senha);
            
            mysqli_stmt_execute($stmt);
            
            mysqli_stmt_bind_result($stmt, $resultado);
            mysqli_stmt_fetch($stmt);
            
            if(isset($resultado) > 0){
                $_SESSION['login'] = $email;
                $_SESSION['tipousuario'] = "aluno";
                header("Location: control/home.php");
            }else{
                echo "Usuário ou senha incorretos";
                header("Location: index.php");
            }
        }

        if(isset($conexao)){
            $stmt = mysqli_prepare($conexao, "select email from professor where email = ? and senha = ?");
            mysqli_stmt_bind_param($stmt, "ss", $email, $senha);

            mysqli_execute($stmt);

            mysqli_stmt_bind_result($stmt, $resultado);
            mysqli_stmt_fetch($stmt);

            if(isset($resultado) > 0){
                $_SESSION['login'] = $email;
                $_SESSION['tipousuario'] = "professor";
                header("Location: control/home.php");
            }else{
                echo "Usuário ou senha incorretos";
                header("Location: index.php");
            }
        }
    }
?>