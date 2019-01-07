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

            <h4 class="center-align uppercase">Conceitos dos candidatos</h4> 

            <p>Abaixo é exibo os conceitos obtidos pelos candidatos nas provas de proficiência. S/C indica que o aluno ainda não foi avaliado. DP indica que o
            aluno foi dispensado.</p>
          
            <table class="striped">
                <thead>
                    <tr>
                        <th>Matrícula</th>
                        <th>Nome</th>
                        <th>Idioma</th>
                        <th>Conceito</th>
                        <th>Ação</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $query = "SELECT * FROM provas_proficiencia WHERE edital = '" . $edital . "'";
                    $resultado = conecta_seleciona($query);

                    while ($res = mysqli_fetch_assoc($resultado)) {

                        echo('<tr><td>' . $res['matricula'] . '</td>');
                        echo('<td>' . $res['nome'] . '</td>');
                        echo('<td>' . $res['prova'] . '</td>');
                        echo('<td>' . $res['conceito'] . '</td>');
                        echo('<td><form style="display: inline;" method="post" action="aeri_proficiencia_alterar_conceito.php" > <input type="hidden" name="edital" value="' . $res['edital'] . '"/>
                            <input type="hidden" name="matricula" value="' . $res['matricula'] . '"/>
                                <input type="hidden" name="nome" value="' . $res['nome'] . '"/>
                                <input type="hidden" name="prova" value="' . $res['prova'] . '"/>
                         <button class="btn waves-effect waves-light blue-grey " type="submit" name="alterar"> Alterar conceito</button> </form></td></tr>');
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