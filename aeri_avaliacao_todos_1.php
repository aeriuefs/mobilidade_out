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

        <section class="section container">

            <h4 class="center-align uppercase"> Candidatos do edital <?php echo($edital) ?> </h4> 

            <p>Abaixo estão listados todos os candidatos com suas respectivas situações atuais.</p>

            <table class="striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Matrícula</th>
                        <th>Situação atual</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $query = "SELECT * FROM candidaturas A INNER JOIN status_inscricao B ON A.situacao_atual = B.id WHERE edital='" . $edital . "'";
                    $resultado = conecta_seleciona($query);

                    while ($res = mysqli_fetch_assoc($resultado)) {

                        echo('<tr><td>' . $res['nome'] . '</td>');
                        echo('<td>' . $res['matricula'] . '</td>');
                        echo('<td>' . $res['titulo'] . '</td>');
                        echo('<td><form style="display: inline;" method="post" action="aeri_detalhes_candidatura.php" > '
                        . '<input type="hidden" name="edital" value="' . $res['edital'] . '"/>'
                        . '<input type="hidden" name="matricula" value="' . $res['matricula'] . '"/>
                         <button class="btn waves-effect waves-light blue-grey " type="submit" name="detalhes"> Detalhes </button> </form>
<form style="display: inline;" method="post" action="aeri_acompanhar_processo.php" > '
                        . '<input type="hidden" name="edital" value="' . $res['edital'] . '"/>'
                        . '<input type="hidden" name="matricula" value="' . $res['matricula'] . '"/>
                         <button class="btn waves-effect waves-light blue-grey " type="submit" name="processo"> Histórico </button> </form>                         
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