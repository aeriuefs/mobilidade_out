<?php
require_once('funcoes_banco_de_dados.php');
require_once('funcoes_uteis.php');

verificar_sessao();

require_once('funcoes_de_arquivos.php');
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

            <section class="section container">
                <h4 class="center-align uppercase">Notificações</h4>

                <p>Logo abaixo você pode visualizar as notificações que você recebeu. Elas estão separadas por categoria (Não lidas e Lidas). Após ter acessado está página, suas 
                    novas notificações serão definidas como "lidas", mas ainda estarão disponíveis. Fique atento!</p>

                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header active"><i class="material-icons">notifications_active</i>Não lidas</div>
                        <div class="collapsible-body">

                            <?php
                            $query = "SELECT * FROM notificacoes WHERE destinatario='" . $_SESSION['matricula'] . "' AND status='0'";

                            $resultado = conecta_seleciona($query);

                            if (mysqli_num_rows($resultado) > 0) {

                                while ($res = mysqli_fetch_assoc($resultado)) {
                                    echo('<p class="orange-text"> • ' . $res['mensagem'] . '</p>');
                                    echo('<p><b>' . $res['remetente'] . '</b> - ' . formatar_data($res['data']) . ' </p><hr>');
                                }
                            } else {
                                echo '<span>Nenhuma mensagem.</span>';
                            }
                            ?>

                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">notifications</i>Lidas</div>
                        <div class="collapsible-body">

                            <?php
                            $query = "SELECT * FROM notificacoes WHERE destinatario='" . $_SESSION['matricula'] . "' AND status='1'";

                            $resultado = conecta_seleciona($query);

                            if (mysqli_num_rows($resultado) > 0) {

                                while ($res = mysqli_fetch_assoc($resultado)) {
                                    echo('<p> • ' . $res['mensagem'] . '</p>');
                                    echo('<p><b>' . $res['remetente'] . '</b> - ' . formatar_data($res['data']) . ' </p><hr>');
                                }
                            } else {
                                echo '<span>Nenhuma mensagem.</span>';
                            }

                            // Marcando como lidas
                            $query = "UPDATE notificacoes SET status='1'  WHERE destinatario='" . $_SESSION['matricula'] . "'";
                            conecta_insere($query);
                            ?>

                        </div>
                    </li>
                </ul>

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