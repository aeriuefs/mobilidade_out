<?php
session_start();
if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_uteis.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <header>
        <?php
        include("topo_pagina.php");
        ?>
    </header>
</head>
<body>

    <header>
        <?php
        include("navbar_aeri.php");
        ?>
    </header>

    <main>

        <?php
        include("parallax.php");
        ?>

        <section class="section container">
            <h4 class="center-align uppercase">Anexar documentos</h4>
            <form class="col s12" action="bd_candidato_cadastro.php">

                <br>

                <b>Dados do documento</b>

                <div class="row">

                    <div class="input-field col l12 m12 s12">
                        <input  id="nome" type="text" name="nome" class="validate">
                        <label for="nome">Nome do documento</label>
                    </div>

                </div>

                <div class="row">

                    <div class="input-field col l12 m12 s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1">Justificativa</label>
                    </div>

                </div>

                <div class="row">
                    <div class="input-field col l12 m12 s12">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Anexar</span>
                                <input type="file" name="">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col l12 m12 s12">
                        <button class="btn waves-effect waves-light blue-grey " type="submit" name="entrar">Enviar dados

                            <i class="material-icons right">chevron_right</i>

                        </button>
                    </div>

                </div>

            </form>

        </section>

    </main>


    <?php
    include("rodape_aeri.php");
    ?>


    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    <script> $(".button-collapse").sideNav();</script>
</body>
</html>