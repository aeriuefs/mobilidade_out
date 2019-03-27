<?php
session_start();
if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_banco_de_dados.php');
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

            <h4 class="center-align uppercase">Enviar documentos aos colegiados — Edital <?php echo ($edital); ?></h4> 

            <b>Candidatos</b>
            <br>

            <form method="post" action="">

                <?php
                $query = "SELECT * FROM candidaturas WHERE edital = '" . $edital . "'";
                $resultado = conecta_seleciona($query);
                $i = 0;
                while ($res = mysqli_fetch_assoc($resultado)) {

                    echo('<p><input type="checkbox" name="ckb[]" id="' . $i . '" value="' . $res['matricula'] . '" /> <label for="' . $i . '">' . $res['nome'] . ' — Matrícula: ' . $res['matricula'] . '</p> </label></p>');

                    $i++;
                }
                ?>

                <hr>
                <b>Mensagem (Opcional)</b>
                
                <div class="row">

                    <div class="input-field col l12 m12 s12">
                        <input type="text" id="informacao" class="materialize-textarea"></textarea>
                        <label for="informacao">Adicionar informação</label>
                    </div>

                </div>

                <button class="btn waves-effect waves-light " type="submit" name="alterar"> Enviar</button> 

            </form>

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