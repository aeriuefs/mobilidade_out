<?php
session_start();
if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_uteis.php');

$matricula = $_POST['matricula'];

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
            <h4 class="center-align uppercase">Candidato</h4>

            <b>Dados básicos</b>
            <?php
           
            $query = "SELECT * FROM candidatos WHERE matricula='" . $matricula . "'";
            $resultado = conecta_seleciona($query);
            $res = mysqli_fetch_assoc($resultado);
            ?>

            <p>Nome: <span style="color: #737373"> <?php echo($res['nome']); ?></span></p>

            <p>E-mail: <span style="color: #737373"> <?php echo($res['email']); ?> </span></p>

            <p>Matrícula: <span style="color: #737373"> <?php echo($res['matricula']); ?> </span></p>

            <p>CPF: <span style="color: #737373"> <?php echo($res['cpf']); ?> </span></p>

            <p>Registro Geral (RG): <span style="color: #737373"> <?php echo($res['rg']); ?> </span></p>

            <p>Orgão Expedidor: <span style="color: #737373"> <?php echo($res['orgao_expedidor']); ?> </span></p>

            <p>Sexo: <span style="color: #737373"> <?php echo($res['sexo']); ?> </span></p>

            <hr>

            <b>Candidaturas</b>

            <table class="striped">
                <thead>
                    <tr>
                        <th>Edital</th>
                        <th>Ações</th>
                        <th>Situação atual</th>

                    </tr>
                </thead>

                <tbody>

                    <?php
                    $query = "SELECT id, edital, matricula FROM candidaturas";
                    $resultado = conecta_seleciona($query);

                    while ($res = mysqli_fetch_assoc($resultado)) {
                        echo('<tr><td>' . $res['edital'] . '</td>');
                        echo('<td><form style="display: inline;" method="post" action="aeri_detalhes_candidatura.php" > <input type="hidden" name="edital" value="' . $res['edital'] . '"/>
                        <input type="hidden" name="matricula" value="' . $matricula . '"/> <button class="btn waves-effect waves-light blue-grey " type="submit" name="datalhes"> Detalhes </button> </form></td>');

                        echo('<td><form style="display: inline;" method="post" action="aeri_acompanhar_processo.php" > <input type="hidden" name="edital" value="' . $res['edital'] . '"/>
                        <input type="hidden" name="matricula" value="' . $matricula . '"/> '
                                . '<button class="btn waves-effect waves-light blue-grey " type="submit" name="acompanhar"> Acompanhar</button> </form></td></tr>');
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