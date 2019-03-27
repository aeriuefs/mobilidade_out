<?php
session_start();
if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_banco_de_dados.php');
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
            <h4 class="center-align uppercase">Estudantes</h4>

            <b>Pesquisa</b>
            <form method="post" action="aeri_pesquisa.php">
                
                <div class="row">

                    <div class="input-field col l9 m9 s6 ">                
                        <input  id="telefone" type="text" class="validate" name="pesquisa">
                        <label for="pesquisa">Digite o nome do aluno</label>
                    </div>

                    <div class="input-field col l3 m3 s6 ">
                        <button class="btn waves-effect waves-light" type="submit" name="enviar">Pesquisar
                            <i class="material-icons right">search</i>
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