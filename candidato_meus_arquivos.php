<?php
require_once('funcoes_banco_de_dados.php');
require_once('funcoes_uteis.php');

verificar_sessao();

require_once('funcoes_de_arquivos.php');

$edital = isset($_POST['edital']) ? $_POST['edital'] : recurpera_candidato();

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

                    <b class="uppercase orange-text">Anexar novos arquivos</b>
                    <br> <br>

                    <form method="post" action="bd_candidato_adicionar_arquivo.php" enctype="multipart/form-data">

                        <input type="hidden" name="edital" value="<?php echo($edital); ?>"/>

                        <div class="file-field input-field">
                            <div class="btn indigo lighten-2">
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

                        <button class="btn waves-effect waves-light indigo lighten-2" type="submit" name="enviar">Enviar</button>

                    </form>

                    <br> <br>
                    
                    <b class="uppercase orange-text">Documentos da inscrição</b>
                         
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
                            $caminho = 'arquivos/editais/' . str_replace('/', '-', $edital) . '/candidatos/' . $_SESSION['matricula'] . '/arquivos_inscricao/';

                            listagem_arquivos($caminho);
                            ?>

                        </tbody>
                    </table>
                    
                    <br>

                    <b class="uppercase orange-text">Certificados</b>

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
                            $caminho = 'arquivos/editais/' . str_replace('/', '-', $edital) . '/candidatos/' . $_SESSION['matricula'] . '/certificados/';

                            listagem_arquivos($caminho);
                            ?>

                        </tbody>
                    </table>

                    <br>
                    
                    <b class="uppercase orange-text">Outros arquivos</b>

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
                            $caminho = 'arquivos/editais/' . str_replace('/', '-', $edital) . '/candidatos/' . $_SESSION['matricula'] . '/documentos/';

                            listagem_arquivos($caminho);
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