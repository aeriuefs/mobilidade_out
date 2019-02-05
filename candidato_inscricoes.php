<?php
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

            <?php
            include("parallax.php");


            $query = "SELECT id, edital, matricula FROM candidaturas WHERE matricula='" . $_SESSION['matricula'] . "'";
            $resultado = conecta_seleciona($query);
            ?>

            <section class="section container">

                <h4 class="center-align uppercase">Processos em andamento</h4> 

                <p>Cliando em Datalhes, é possível visualizar os dados enviados na sua inscrição. Clicando em Acompanhar Inscrição, poderá visualizar o histórico de atualizações. Se a opção de <b>recurso</b> for cabível, esta também estará disponível nesta sessão.</p>

                <br>
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
                        while ($res = mysqli_fetch_assoc($resultado)) {
                            echo('<tr><td>' . $res['edital'] . '</td>');
                            echo('<td><form style="display: inline;" method="post" action="candidato_inscricao_detalhes.php" > <input type="hidden" name="edital" value="' . $res['edital'] . '"/>
                        <input type="hidden" name="matricula" value="' . $_SESSION['matricula'] . '"/> <button class="btn waves-effect waves-light indigo lighten-2 " type="submit" name="datalhes"> Detalhes </button> </form></td>');

                            echo('<td><form style="display: inline;" method="post" action="candidato_inscricao_historico.php" > <input type="hidden" name="edital" value="' . $res['edital'] . '"/>
                        <input type="hidden" name="matricula" value="' . $_SESSION['matricula'] . '"/> <button class="btn waves-effect waves-light indigo lighten-2 " type="submit" name="acompanhar"> Acompanhar</button> </form></td></tr>');
                        }
                        ?>



                    </tbody>
                </table>

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