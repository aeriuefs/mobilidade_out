<?php
session_start();
if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_uteis.php');

$edital = $_POST['edital'];


$query = "SELECT * FROM candidaturas WHERE matricula='" . $_SESSION['matricula'] . "' AND edital='" . $edital . "'";
$resultado = conecta_seleciona($query);

if (mysqli_num_rows($resultado) != 0) {

    $res = mysqli_fetch_assoc($resultado);

    //Depois pegar do banco de dados os itens que cabe recurso
    $array = array('2', '6', '10');

    if (!in_array($res['situacao_atual'], $array)) {
        echo "<script>alert('Você não tem direito ou não necessita pedir este recurso!');</script>";

       header("refresh: 0; url=candidato_home.php");
    }
} else {

    echo "<script>alert('Você não tem direito ou não necessita pedir este recurso!');</script>";

    header("refresh: 0; url=candidato_home.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

    <?php
    include("topo_pagina.php");
    ?>

    <body>

        <header>
            <?php
            include("navbar_candidato.php");
            ?>
        </header>

        <main>

            <?php
            include("parallax.php");
            ?>

            <section class="section container">

                <h4 class="center-align uppercase"> Pedido de recurso (Edital <?php echo($edital); ?>) </h4>                

                <div class="row">
                    <form class="col s12" action="bd_candidato_solicitacao_recurso.php">

                        <input type="hidden" name="edital" value="<?php echo($edital); ?>"/>

                        <p></p>

                        <b>Informações sobre o recurso</b>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="nome_opcao_1" type="text" name="explanacao" class="validate">
                                <label for="explanacao">Explanação</label>
                            </div>
                        </div>



                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Arquivo</span>
                                <input type="file" name="arquivo">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>


                        <b>Declarações</b>

                        <div class="row">

                            <p>

                                <input type="checkbox" id="declaracao_1" name="declaracao_1" required="required"/>
                                <label for="declaracao_1">Declaro que...</label>

                            </p>

                        </div>



                        <button class="btn waves-effect waves-light" type="submit" name="enviar">Enviar dados para análise
                            <i class="material-icons right">send</i>
                        </button>



                    </form>

                </div>

            </section>

        </main>
        <!--END MAIN-->


        <?php
        include("rodape_pagina.php");
        ?>

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>

        <script> $(".button-collapse").sideNav();</script>

        <script>

            $('.datepicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 100, // Creates a dropdown of 15 years to control year,
                today: 'Hoje',
                clear: 'Limpar',
                close: 'Ok',
                closeOnSelect: false // Close upon selecting a date,
            });

        </script>

        <script>

            $(document).ready(function () {
                $('select').material_select();
            });

        </script>

    </body>
</html>
