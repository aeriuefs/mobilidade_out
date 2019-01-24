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

                <h4 class="center-align uppercase"> MOBILIDADE NACIONAL ABRUEM (Edital - <?php echo($edital); ?>) </h4>                

                <div class="row">
                    <form class="col s12" action="bd_candidato_inscricao_ficha_3.php" enctype="multipart/form-data" method="post">

                        <input type="hidden" name="edital" value="<?php echo($edital); ?>"/>

                        <b>Informações e arquivos sobre o destino</b>

                        <br><br>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="nome_opcao_1" type="text" name="nome_opcao_1" class="validate" required>
                                <label for="nome_opcao_1">Universidade pretendida</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="curso_opcao_1" type="text" name="curso_opcao_1" class="validate" required>
                                <label for="curso_opcao_1">Curso</label>
                            </div>
                        </div>

                        <select NAME = "local" SIZE=1 required>

                            <option value="AC"> Acre </option>
                            <option value="AL"> Alagoas </option>
                            <option value="AP"> Amapá </option>
                            <option value="AM"> Amazonas </option>
                            <option value="BA"> Bahia </option>
                            <option value="CE"> Ceará </option>
                            <option value="DF"> Distrito Federal </option>
                            <option value="ES"> Espírito Santo </option>
                            <option value="GO"> Goiás </option>
                            <option value="MA"> Maranhão </option>
                            <option value="MT"> Mato Grosso </option>
                            <option value="MS"> Mato Grosso do Sul </option>
                            <option value="MG"> Minas Gerais </option>
                            <option value="PA"> Pará </option>
                            <option value="PB"> Paraíba </option>
                            <option value="PR"> Paraná </option>
                            <option value="PE"> Pernambuco </option>
                            <option value="PI"> Piauí </option>
                            <option value="RJ"> Rio de Janeiro </option>
                            <option value="RN"> Rio Grande do Norte </option>
                            <option value="RS"> Rio Grande do Sul </option>
                            <option value="RO"> Rondônia </option>
                            <option value="RR"> Roraima </option>
                            <option value="SC"> Santa Catarina </option>
                            <option value="SP"> São Paulo </option>
                            <option value="SE"> Sergipe </option>
                            <option value="TO"> Tocantins </option>

                        </select>

                        <label>Estado da instituição</label>

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
                                <label for="declaracao_1"> Declaro que possuo conhecimento das Resoluções da UEFS que
                                    normatizam o intercâmbio/mobilidade nacional (Resoluções CONSEPE 16
                                    e 17/2015 e Resolução CONSAD 037/2016). </label>

                            </p>

                            <p>

                                <input type="checkbox" id="declaracao_2" name="declaracao_2" required="required"/>
                                <label for="declaracao_2"> Declaro que possuo conhecimento de que a UEFS disponibiliza bolsas
                                    anuais para os estudantes em mobilidade nacional (valor: R$700,00)
                                    devendo o candidato se responsabilizar pelas demais despesas (passagem
                                    aérea, seguro saúde, etc). </label>

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
