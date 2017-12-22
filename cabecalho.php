<?php require_once("mostra_alerta.php");
require_once("logica_usuario.php");
?>

<html>
<head>
    <title>Minha loja</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/loja.css" rel="stylesheet" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="background-color: #F6F6F6">

<header>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">

            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand">Minha Loja</a>
            </div>
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav pull-right">

                    <?php
                    if(usuarioEstaLogado()) {
                        ?>
                        <li><a href="formulario.php">Adiciona Produto</a></li>
                        <li><a href="lista.php">Lista</a></li>
                        <li>
                            <p>                    </p>
                        </li>
                        <li><a href="logout.php"><span class="glyphicons glyphicons-power"></span> Sair</a></li>
                        <?php
                    } else {
                        ?>
                        <form action="login.php" method="post">
                            <li style="padding-top: 5px">
                                <input  type="email" name="email">
                                <input  type="password" name="senha">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </li>
                        </form>



                        <?php
                    }


                    ?>


                </ul>


            </div>

        </div>
    </div>

    <div class="container">
        <div class="principal">
            <?php
            mostraAlerta("success");
            mostraAlerta("danger");
            ?>

