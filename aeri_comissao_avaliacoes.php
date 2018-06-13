<?php
require_once('sessao_aeri.php');
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

            <h4 class="center-align uppercase">Estudantes Avaliados</h4>

            <p>Abaixo estão listados todos os candidatos avaliados com suas notas e respectivos avaliadores.</p>

            <table class="striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Nota</th>
                        <th>Avaliador</th>
                        <th>Ação</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $query = "SELECT * FROM candidaturas WHERE edital='" . $edital . "' AND situacao_atual='10' OR situacao_atual='11'";
                    $resultado = conecta_seleciona($query);

                    while ($res = mysqli_fetch_assoc($resultado)) {

                        echo('<tr><td>' . $res['nome'] . '</td>');
                        echo('<td>' . $res['nota_final'] . '</td>');
                        echo('<td>' . $res['avaliador'] . '</td>');
                        echo('<td><form style="display: inline;" method="post" action="aeri_barema_notas.php" > '
                        . '<input type="hidden" name="edital" value="' . $res['edital'] . '"/>'
                        . '<input type="hidden" name="matricula" value="' . $res['matricula'] . '"/>
                         <button class="btn waves-effect waves-light blue-grey " type="submit" name="detalhes"> Detalhes </button> </form></td></tr>');
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