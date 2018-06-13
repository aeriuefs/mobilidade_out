<?php
session_start();
if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_uteis.php');

$edital = $_POST['edital'];
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

            <h4 class="center-align uppercase">Respostas dos colegiados — Edital <?php echo ($edital); ?></h4> 

            <p>Abaixo são listadas as respostas recebidas pelos colegiados.</p>
            <br>


        </section>

    </section>

</main>


<?php
include("rodape_aeri.php");
?>


<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

<script> $(".button-collapse").sideNav();</script>

<script>

    $(document).ready(function () {
        $('select').material_select();
    });

</script>
</body>
</html>