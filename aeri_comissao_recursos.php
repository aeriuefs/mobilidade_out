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

            <h4 class="center-align uppercase">Recursos</h4> 

            <table class="bordered">
                <thead>
                    <tr>
                        <th>Edital</th>
                        <th>Matrícula</th>                  
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    $query = "SELECT * FROM candidato_recursos WHERE edital='" . $edital . "'";
                    $resultado = conecta_seleciona($query);

                    while ($res = mysqli_fetch_assoc($resultado)) {

                        echo('<tr><td>' . $res['edital'] . '</td>');

                        echo('<td>' . $res['matricula'] . '</td>');

                        echo('<td><form style="display: inline;" method="post" action="aeri_recurso_avaliacao.php" > <input type="hidden" name="id" value="' . $res['id'] . '"/>
                            
                         <button class="btn waves-effect waves-light blue-grey " type="submit" name="detalhes"> Detalhes </button> </form>
                         
                        </td></tr>');
                    }
                    ?>

                </tbody>
            </table>


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