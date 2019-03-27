<?php
require_once('sessao_aeri.php');
require_once('funcoes_banco_de_dados.php');
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

        <main>

            <?php
            include("parallax.php");
            ?>

            <section class="section container">

                <h4 class="center-align uppercase">Avaliação</h4> 

                <p>Selecione abaixo o edital do qual deseja obter informações.</p>

                <table class="striped">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Número</th>
                            <th>Vagas</th>
                            <th>Data limite</th>
                            <th>Ação</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $query = "SELECT * FROM editais ";
                        $resultado = conecta_seleciona($query);

                        while ($res = mysqli_fetch_assoc($resultado)) {

                            echo('<tr><td>' . $res['tipo_intercambio'] . '</td>');
                            echo('<td>' . $res['numero_edital'] . '</td>');
                            echo('<td>' . $res['numero_vagas'] . '</td>');
                            echo('<td>' . date('d/m/Y', strtotime($res['fim_inscricao'])) . '</td>');
                            echo('<td><form style="display: inline;" method="post" action="aeri_avalicacao_designacao_final.php" > '
                            . '<input type="hidden" name="edital" value="' . $res['numero_edital'] . '"/>
                         <button class="btn waves-effect waves-light blue-grey " type="submit" name="selecionar"> Selecionar </button> </form></td></tr>');
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