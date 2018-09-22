<?php require_once ("banco-usuario.php");?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Página Inicial</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Lobster|Satisfy" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="light-green lighten-5">
    <div class="container">
        <div class="row">
            <div class="col s12 m8 offset-m2">
                <form class="login-form" method="post" action="controlform.php">
                    <div class="card">
                        <div class="card-image">
                            <img src="login-image.jpg">
                            <span class="card-title">
                                <h3 style="font-family: 'Kaushan Script', cursive;">Bem-vindo ao VestCollege</h3>
                                <h5 style="font-family: 'Kaushan Script', cursive;">Login de Usuário</h5>
                            </span>
                        </div>
                        <div class="card-content">
                            <div class="input-field">
                                <input class="validate" id="email" type="email" name="email">
                                <label for="email">Email</label>
                            </div>

                            <div class="row">
                                <div class="col s12">
                                    <div class="input-field">
                                        <input id="senha" type="password" name="senha">
                                        <label for="senha">Senha</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action blue-grey lighten-3">
                            <div class="center-align">
                                <button type="submit" class="btn blue-grey darken-1"><i class="material-icons left">vpn_key</i>Login</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col s4">
                        <a href="paginaCadastro.php">Cadastrar</a>
                    </div>
                    <div class="col s8 right-align">
                        <a href="#" class="">Esqueci a senha</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
</body>

</html>