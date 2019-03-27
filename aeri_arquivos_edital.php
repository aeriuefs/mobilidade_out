<?php
require_once('sessao_aeri.php');
require_once('funcoes_banco_de_dados.php');

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

        </header>

        <main>

            <section class="section container">

                <h4 class="center-align uppercase">Arquivos do edital</h4> 

                <table class="striped">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Nome</th>
                            <th>Ações</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        
                        $caminho_edital = str_replace('/', '-', $edital);
                        $caminho = 'arquivos/editais/' . $caminho_edital . '/arquivos_edital/';
                        $diretorio = dir($caminho);
                        while (($arquivo_1 = $diretorio->read()) !== false) {

                            if (strrchr($arquivo_1, '.') == '.pdf') {

                                echo '<tr><td> <img src = "img/icones/pdf.png" width = "30" height = "30" /></td>
                            <td>' . $arquivo_1 . '</td>
                            <td> <a href=' . $caminho . $arquivo_1 . ' download="' . $arquivo_1 . '">' . 'Download' . '</a></td></tr>';
                            }
                        }

                        $diretorio->close();
                        
                        ?>
                    </tbody>
                </table>

            </section>

        </main>

<?php
include("rodape_aeri.php");
include("scripts.php");
?>

    </body>

</html>