<?php
require_once('funcoes_uteis.php');

verificar_sessao();

require_once('funcoes_de_arquivos.php');

$edital = $_POST['edital'];
?>

<!DOCTYPE html>
<html lang="pt-br">

    <?php
    include("topo_pagina.php");
    ?>

    <body>

        <header>
            <?php
            include("navbar_candidato.php");
            ?>
        </header>

        <main>

            <?php
            include("parallax.php");
            ?>

            <section class="section container">

                <h4 class="center-align uppercase"> Intercâmbio de Estudantes Brasil-Colômbia (BRACOL - <?php echo($edital); ?>) </h4>                

                <div class="row">
                    <form class="col s12" action="bd_candidato_inscricao_ficha_2.php" enctype="multipart/form-data" method="post">

                        <input type="hidden" name="edital" value="<?php echo($edital); ?>"/>

                        <b>Informações e arquivos sobre o destino</b>

                        <br><br>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="nome_opcao_1" type="text" name="nome_opcao_1" class="validate" disabled value="Universidad Autónoma de Occidente">
                                <label for="nome_opcao_1">Universidade pretendida</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="curso_opcao_1" type="text" name="curso_opcao_1" class="validate" required>
                                <label for="curso_opcao_1">Curso</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="local_opcao_1" type="text" name="local_opcao_1" class="validate" disabled value="Colômbia">
                                <label for="local_opcao_1">País</label>
                            </div>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Plano de trabalho</span>
                                <input type="file" name="plano_trabalho_opcao_1">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Plano de estudo</span>
                                <input type="file" name="plano_estudo_opcao_1">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>

                        <b>Outros arquivos</b>

                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Currículo Lattes</span>
                                <input type="file" name="curriculo_lattes">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Certificados</span>
                                <input type="file" name="certificados[]" multiple="">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Selecione todos os certificados de comprovação do Currículo Lattes.">
                            </div>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Guia de matrícula</span>
                                <input type="file" name="guia_matricula">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Histórico escolar</span>
                                <input type="file" name="historico">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Comprovante de porcentagem cumprida</span>
                                <input type="file" name="porcentagem">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Foto 3x4</span>
                                <input type="file" name="foto">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>

                        <b>Carta de recomendação</b>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="nome_professor" type="text" name="nome_professor" class="validate" required>
                                <label for="nome_professor">Nome do professor</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email_professor" type="text" name="email_professor" class="validate" required>
                                <label for="email_professor">E-mail do professor</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="departamento_professor" type="text" name="departamento_professor" class="validate" required>
                                <label for="departamento_professor">Departamento do professor</label>
                            </div>
                        </div>

                        <b>Declarações</b>

                        <div class="row">

                            <p>

                                <input type="checkbox" id="declaracao_1" name="declaracao_1" required="required"/>
                                <label for="declaracao_1">Declaro que possuo conhecimento das Resoluções da UEFS que normatizam o intercâmbio 
                                    (Resolução CONSEPE 16/2015, Resolução CONSEPE 17/2015 e Resolução CONSEPE 66/2016).</label>

                            </p>

                        </div>

                        <div class="row">

                            <button class="btn waves-effect waves-light" type="submit" name="enviar">Enviar dados para análise
                                <i class="material-icons right">send</i>
                            </button>

                        </div>

                    </form>

                </div>

            </section>

        </main>
        <!--END MAIN-->


        <?php
        include("rodape_pagina.php");
        include("scripts.php");
        ?>

    </body>
</html>
