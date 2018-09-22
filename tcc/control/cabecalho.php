<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>VestCollege</title>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Lobster|Satisfy|Gloria+Hallelujah" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="../vestcollege/fonts\roboto">
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <style type="text/css">
        .row .col {
            float: left;
            box-sizing: border-box;
            padding: 0 ;
            min-height: 1px;
        }

        .card {
            margin-top: 60px;
        }

        nav ul li:hover {
            background-color: #455a64;
        }

        #menor, h6{
            margin-right: 10px;
            margin-left: 10px;
        }

        h6{
            text-align: justify;
        }

        #titulo, #introducao, #desenvolvimento, #intervencao, #argumento1, #argumento2, #argumento3, #conclusao, #competencia1, #competencia2, #competencia3, #competencia4, #competencia5, #tessitura, #coesao {
            border: 1px solid #ef9a9a;
            border-radius: 2px;
            margin-top: 0.5em;
            margin-bottom: 0;
            box-sizing: border-box;
        }
        #collection>a {
            border: 1px solid #9ccc65;
            border-radius: 2px;
            margin-bottom: 0.5em;
            box-sizing: border-box;
            margin-left: 10px;
        }

        #collection, #dicas{
            border: transparent;
        }

        #dicas> li{
            border-radius: 2px;
            margin-bottom: 0.5em;
            box-sizing: border-box;
            margin-right: 10px;
        }

        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        nav> div> a, nav> div> ul> li> a {
            font-family: 'kaushan Script', cursive;
        }

        h3 {
            font-family: 'Satisfy', cursive;
        }
    </style>
</head>

<body class="blue-grey lighten-5">
    <nav class="blue-grey darken-4" role="navigation">
        <div class="nav-wrapper container">
            <a href="../index.php" class="brand-logo white-text">VestCollege</a>
            <ul id="nav-mobile" class="right">
                <li><a href="home.php" class="white-text" style="font-size: 19px;">Produção Textual</a></li>
                <li><a href="paginaAluno.php" class="white-text" style="font-size: 19px;">Página do Aluno</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="row">
            <div id="collection" class="collection col l2 s12">
                <a href="escrita-processo.php" class="collection-item center-align black-text light-green lighten-2">A ESCRITA COMO PROCESSO</a>
                <a href="coerencia.php" class="collection-item center-align black-text light-green lighten-2">COERÊNCIA</a>
                <a href="coesao.php" class="collection-item center-align black-text light-green lighten-2">COESÃO</a>
                <a href="competencias.php" class="collection-item center-align black-text light-green lighten-2">COMPETÊNCIAS AVALIADAS NO ENEM</a>
                <a href="conectivos.php" class="collection-item center-align black-text light-green lighten-2">CONECTIVOS</a>
                <a href="estilistica.php" class="collection-item center-align black-text light-green lighten-2">ESTILÍSTICA</a>
                <a href="principal.php" class="collection-item center-align black-text light-green lighten-2">EXEMPLOS DE REDAÇÃO NOTA MIL</a>
                <a href="progressao.php" class="collection-item center-align black-text light-green lighten-2">PROGRESSÃO TEXTUAL</a>
                <a href="tessitura.php" class="collection-item center-align black-text light-green lighten-2">TESSITURA TEXTUAL</a>
            </div>
