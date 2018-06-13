<?php
session_start();
if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_uteis.php');

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
            include("navbar_aeri.php");
            ?>
        </header>

        <!--Main-->
        <main>




            <section class="section container">
                <h4 class="center-align uppercase">Notificações</h4>

                <p>Logo abaixo você pode visualizar as notificações que você recebeu. Elas estão separadas por categoria (Não lidas e Lidas). Após ter acessado está página, suas 
                novas notificações serão definidas como "lidas", mas ainda estarão disponíveis. Fique atento!</p>

                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header active"><i class="material-icons">notifications_active</i>Não lidas</div>
                        <div class="collapsible-body"><span>Nenhuma notificação.</span></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">notifications</i>Lidas</div>
                        <div class="collapsible-body"><span>Nenhuma notificação.</span></div>
                    </li>
                </ul>

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

        <script>
            $(document).ready(function () {

                $('.modal').modal();
            });
        </script>

        <script>

            $(document).ready(function () {
                $('.collapsible').collapsible();
            });

        </script>
    </body>
</html>