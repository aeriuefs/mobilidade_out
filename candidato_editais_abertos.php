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
            ?>

            <?php
            $query = "SELECT * FROM editais ";
            $resultado = conecta_seleciona($query);
            ?>

            <section class="section container">

                <h4 class="center-align uppercase">Editais abertos</h4>                

                <br><br><br>
                <table class="striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Número</th>
                            <th>Vagas</th>
                            <th>Data limite</th>
                            <th>Dowloads</th>
                            <th>Ação</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($res = mysqli_fetch_assoc($resultado)) {
                            if (data_no_intervalor($res['inicio_inscricao'], $res['fim_inscricao'])) {
                                echo('<tr><td>' . $res['tipo_intercambio'] . '</td>');
                                echo('<td>' . $res['numero_edital'] . '</td>');
                                echo('<td>' . $res['numero_vagas'] . '</td>');
                                echo('<td>' . formatar_data($res['fim_inscricao']) . '</td>');
                                echo('<td><form style="display: inline;" method="post" action="aeri_arquivos_edital.php" > 
                <input type="hidden" name="edital" value="' . $res['numero_edital'] . '"/>                 
                <button class="btn waves-effect waves-light orange darken-4 " type="submit" formtarget="_blank" name="excluir_edital"> Edital</button> 
            </form></td>');
                                echo('<td><form style="display: inline;" method="post" action="candidato_inscricao_ficha_' . $res['codigo'] . '.php" > <input type="hidden" name="edital" value="' . $res['numero_edital'] . '"/>
                        <input type="hidden" name="matricula" value="' . $_SESSION['matricula'] . '"/> <button class="btn waves-effect waves-light blue-grey " type="submit" name="inscrever"> Inscrever </button> </form>'
                                . '</td></tr>');
                            }
                        }
                        ?>
                    </tbody>
                </table>

            </section>

        </main>

        <div class="espacamento"></div>

        <?php
        include("rodape_pagina.php");
        include("scripts.php");
        ?>
    </body>

</html>