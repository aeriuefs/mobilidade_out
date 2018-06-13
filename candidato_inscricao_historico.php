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
        <?php
        include("topo_pagina.php");
        ?>
    </head>
    <body>

        <header>
            <?php
            include("navbar_candidato.php");
            ?>
        </header>

        <!--Main-->
        <main>

            <?php
            include("parallax.php");
            ?>

            <section class="section container">

                <h4 class="center-align uppercase">Detalhes do Processo de candidatura</h4>

                <p>Você pode acompanhar os passos do seu processo de candidatura na linha do tempo abaixo. Quando você não for aprovado em alguma etapa e a opção recurso for cabível, esta estará disponível durante o prazo determinado.  </p> 

                <?php
                $query = "SELECT * FROM historico_candidatos WHERE matricula='" . $_SESSION['matricula'] . "' AND edital='" . $edital . "'";
                $resultado = conecta_seleciona($query);

                while ($res = mysqli_fetch_assoc($resultado)) {

                    echo ('
                    <div class="row">
                    <div class="col s12 m6">

                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">' . $res['titulo'] . '</span>
                                    <span class="new badge blue" data-badge-caption="">' . $res['data'] . '</span>
                                        
                                <p>' . $res['informacao'] . '</p>
                                    <p style="color:#ffb74d;">' . ($res['cabe_recurso'] == 'S' ? 'Cabe recurso no prazo estipulado no edital.' : '') . '</p>
                            </div>
                        </div>
                    </div>
                    
                </div>      
                <div class="row">
                    <div class="col s12 m6">
                        <img class="responsive-img" src="img/icones/direcao.png" width="70" height="70" alt="direcao"/>
                    </div>
                </div>');
                }
                ?>


            </section>

        </main>
        <!--END MAIN-->

        <div class="espacamento"></div>

        <?php
        include("rodape_pagina.php");
        ?>


        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>

        <script> $(".button-collapse").sideNav();</script>
    </body>
</html>