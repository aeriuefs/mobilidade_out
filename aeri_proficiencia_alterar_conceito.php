<?php
session_start();
if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_uteis.php');

$edital = $_POST['edital'];
$matricula = $_POST['matricula'];
$prova = $_POST['prova'];
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

            <h4 class="center-align uppercase">Alterar conceito</h4> 

            <form class="col s12" action="">

                <p>Edital: <?php echo($edital) ?> </p>
                <p>Matrícula: <?php echo($matricula) ?>  </p>
                <p>Idioma: <?php echo($prova) ?> </p>

                <div class="row">

                    <div class="input-field col l6 m6 s12">
                        <input  id="conceito" type="text" class="validate" name="conceito">
                        <label for="conceito">Conceito</label>
                    </div>

                </div>

                <button class="btn waves-effect waves-light" type="submit" name="enviar">Salvar alterações
                    <i class="material-icons right">send</i>
                </button>

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