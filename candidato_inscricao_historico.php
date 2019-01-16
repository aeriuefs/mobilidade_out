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

                $i = 0;
                while ($res = mysqli_fetch_assoc($resultado)) {

                    if ($i != 0) {

                        echo ('<div class="row">
                                <div class="col s12 m6">
                                    <img class="responsive-img" src="img/icones/direcao.png" width="70" height="70" alt="direcao"/>
                                </div>
                               </div>');
                    }

                    $i++;

                    echo ('
                    <div class="row">
                    <div class="col s12 m6">

                        <div class="card brown">
                            <div class="card-content white-text">
                                <span class="card-title">' . $res['titulo'] . '</span>
                                    <span class="new badge red darken-4" data-badge-caption="">' . $res['data'] . '</span>
                                        
                                <p>' . $res['informacao'] . '</p>
                                    <p style="color:#ffb74d;">' . ($res['cabe_recurso'] == 'S' ? 'Cabe recurso no prazo estipulado no edital.' : '') . '</p>
                            </div>
                        </div>
                        
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
        include("scripts.php");
        ?>

    </body>
</html>