<?php
session_start();

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
        include("navbar_aeri_2.php");
        ?>
    </header>

    <main>

        <?php
        include("parallax.php");
        ?>

        <section class="section container">

            <h4 class="center-align uppercase">Estudantes para avaliação</h4> 

            <p>Abaixo são listadas os processos dos estudantes que devem ser avaliados pelo colegiado.</p>
            <br>


            <table class="striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Matrícula</th>
                        <th>Resposta do colegiado</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $query = "SELECT * FROM candidaturas A INNER JOIN status_inscricao B ON A.situacao_atual = B.id WHERE matricula='11111163'";
                    $resultado = conecta_seleciona($query);

                    while ($res = mysqli_fetch_assoc($resultado)) {

                        echo('<tr><td>' . $res['nome'] . '</td>');
                        echo('<td>' . $res['matricula'] . '</td>');
                        echo('<td>' . 'Pendente' . '</td>');
                        echo('<td>
                        <form style="display: inline;" method="post" action="colegiado_avaliar_processo.php" > '
                        . '<input type="hidden" name="edital" value="' . $res['edital'] . '"/>'
                        . '<input type="hidden" name="matricula" value="' . $res['matricula'] . '"/>
                         <button class="btn waves-effect waves-light blue-grey " type="submit" name="processo"> Avaliar </button> </form>                         
                        </td></tr>');
                    }
                    ?>
                </tbody>
            </table>

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