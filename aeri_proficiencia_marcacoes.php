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

            <h4 class="center-align uppercase">Provas marcadas - Edital <?php echo ($edital); ?> </h4> 

            <b>Nova prova</b>
            <br><br>
            <form style="display: inline;" method="post" action="aeri_proficiencia_marcar_prova.php" > 
                <input type="hidden" name="edital" value="<?php echo ($edital); ?>"/>
                <button class="btn waves-effect waves-light blue-grey " type="submit" name="marcar"> Marcar prova</button> 
            </form>

            <br><br>
            <hr>
            <b>Todas as marcações de prova para este edital</b>
            <br>
            <form method="post" action="bd_excluir_provas_proficiencia.php">

                <?php
                $query = "SELECT * FROM provas_proficiencia WHERE edital = '" . $edital . "'";
                $resultado = conecta_seleciona($query);
                $i = 0;
                while ($res = mysqli_fetch_assoc($resultado)) {

                    echo('<p><input type="checkbox" name="ckb[]" id="' . $i . '" value="' . $res['matricula'] . '" /> <label for="' . $i . '"> Matrícula do aluno: ' . $res['matricula'] . ' | Idioma: ' . $res['prova'] . ' | Data: ' . date('d/m/Y', strtotime($res['data'])) . ' | Local e Horário: ' . $res['local'] . '</p> </label></p>');

                    $i++;
                }
                ?>

                <hr>
                <b>Ações</b>
                <br><br>
                <button class="btn waves-effect waves-light red darken-1 " type="submit" name="excluir"> Excluir marcações selecionadas</button> 
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