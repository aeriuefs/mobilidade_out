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
                <h4 class="center-align uppercase">Meus arquivos do edital <?php echo($edital); ?> </h4>

                <div class="row">

                    <b>Anexar novos arquivos</b>
                    <br> <br>

                    <form method="post" action="bd_salvar_arquivo.php" enctype="multipart/form-data">

                        <input type="hidden" name="edital" value="<?php echo($edital); ?>"/>

                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Arquivo</span>
                                <input type="file" name="arquivo" accept="application/pdf">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>

                        <SELECT NAME = "tipo_arquivo" SIZE=1 required="">

                            <?php
                            $query = "SELECT * FROM tipos_arquivos";
                            $resultado_arquivos = conecta_seleciona($query);

                            echo '<option value="" disabled selected>Selecione o tipo de arquivo</option>';

                            while ($lista_tipos = mysqli_fetch_assoc($resultado_arquivos)) {

                                echo ('<OPTION value = "' . $lista_tipos['titulo'] . '">' . $lista_tipos['titulo']);
                            }
                            ?>

                        </SELECT>

                        <button class="btn waves-effect waves-light blue-grey " type="submit" name="enviar">Enviar</button>

                    </form>

                    <br> <br>
                    <b>Arquivos enviados</b>

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
                            $caminho = 'arquivos/editais/' . $caminho_edital . '/candidatos/' . $_SESSION['matricula'] . '/';
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

                </div>

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