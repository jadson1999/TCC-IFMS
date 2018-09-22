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

        nav, main, footer {
            padding-left: 300px;
        }

        @media only screen and (max-width : 992px) {
            header, main, footer {
                padding-left: 0;
            }
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