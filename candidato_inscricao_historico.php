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

                        <div class="card grey darken-4">
                        
                        <div class="card-image">
                            <img src="img/card.jpg">
                             <span class="card-title">' . formatar_data($res['data']) . '</span>
                                 
                        </div>
                        
                        <div class="card-content white-text">
                        
                            <span class="card-title">' . $res['titulo'] . '</span>
                                        
                            <p>' . $res['informacao'] . '</p>
                                      
                        </div>
                        
                        <div class="card-action">
                        ' . ($res['cabe_recurso'] == 'S' ? '<a href="candidato_recursos.php">Cabe recurso</a>' : '') . '
                            <a href="http://aeri.uefs.br/contato.php#conteudo">Contato com a AERI</a>
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