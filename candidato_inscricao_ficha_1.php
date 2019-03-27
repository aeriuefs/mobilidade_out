<?php
require_once('funcoes_banco_de_dados.php');
require_once('funcoes_uteis.php');

verificar_sessao();

require_once('funcoes_de_arquivos.php');
//require_once('funcoes_banco_de_dados.php');

$edital = isset($_POST['edital']) ? $_POST['edital'] : recurpera_candidato();

$query = "SELECT * FROM candidaturas WHERE matricula='" . $_SESSION['matricula'] . "' AND edital='" . $edital . "'";
$resultado = conecta_seleciona($query);

if (mysqli_num_rows($resultado) != 0) {

    echo "<script>alert('Você já se inscreveu neste edital!');</script>";

    header("refresh: 0; url=candidato_home.php");
}
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

                <h4 class="center-align uppercase"> MOBILIDADE ACADÊMICA - AERI (Edital - <?php echo($edital); ?>) </h4> 

                <p>Este é o formulário de inscrição. Todos os campos são obrigatórios 
                    e você se responsabiliza por todas as informações prestadas. Os documentos 
                    devem estar no <b>formato PDF</b> e a foto deve estar no <b>formato JPG</b>. Não serão 
                    aceitos documentos em outros formatos. 
                </p>

                <div class="row">
                    <form class="col s12" action="bd_candidato_inscricao_ficha_1.php" enctype="multipart/form-data"  method="POST" >

                        <input type="hidden" name="edital" value="<?php echo($edital); ?>"/>

                        <b class="orange-text">Primeira opção de universidade:</b>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="nome_opcao_1" type="text" name="nome_opcao_1" class="validate" required>
                                <label for="nome_opcao_1">Nome</label>
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
                                <input id="local_opcao_1" type="text" name="local_opcao_1" class="validate" required>
                                <label for="local_opcao_1">País</label>
                            </div>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn indigo lighten-2">
                                <span>Plano de trabalho</span>
                                <input type="file" name="plano_trabalho_opcao_1" accept="application/pdf" required>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn indigo lighten-2">
                                <span>Plano de estudo</span>
                                <input type="file" name="plano_estudo_opcao_1" accept="application/pdf" required>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>


                        <b class="orange-text">Segunda opção de universidade:</b>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="nome_opcao_2" type="text" name="nome_opcao_2" class="validate" required>
                                <label for="nome_opcao_2">Nome</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="curso_opcao_2" type="text" name="curso_opcao_2" class="validate" required>
                                <label for="curso_opcao_2">Curso</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="local_opcao_2" type="text" name="local_opcao_2" class="validate" required>
                                <label for="local_opcao_2">País</label>
                            </div>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn indigo lighten-2">
                                <span>Plano de trabalho</span>
                                <input type="file" name="plano_trabalho_opcao_2" accept="application/pdf" required>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn indigo lighten-2">
                                <span>Plano de estudo</span>
                                <input type="file" name="plano_estudo_opcao_2" accept="application/pdf" required>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>

                        <b class="orange-text">Terceira opção de universidade:</b>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="nome_opcao_3" type="text"  name="nome_opcao_3" class="validate" required>
                                <label for="nome_opcao_3">Nome</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="curso_opcao_3" type="text" name="curso_opcao_3" class="validate" required>
                                <label for="curso_opcao_3">Curso</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="local_opcao_3" type="text" name="local_opcao_3" class="validate" required>
                                <label for="local_opcao_3">País</label>
                            </div>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn indigo lighten-2">
                                <span>Plano de trabalho</span>
                                <input type="file" name="plano_trabalho_opcao_3" accept="application/pdf" required>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn indigo lighten-2">
                                <span>Plano de estudo</span>
                                <input type="file" name="plano_estudo_opcao_3" accept="application/pdf" required>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>

                        <b class="orange-text">Outros arquivos</b>

                        <div class="file-field input-field">
                            <div class="btn indigo lighten-2">
                                <span>Currículo Lattes</span>
                                <input type="file" name="curriculo_lattes" accept="application/pdf" required>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn indigo lighten-2">
                                <span>Certificados</span>
                                <input type="file" name="certificados[]" multiple="multiple" accept="application/pdf">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Selecione todos os certificados de comprovação do Currículo Lattes.">
                            </div>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn indigo lighten-2">
                                <span>Guia de matrícula</span>
                                <input type="file" name="guia_matricula" accept="application/pdf" required>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn indigo lighten-2">
                                <span>Histórico escolar</span>
                                <input type="file" name="historico" accept="application/pdf" required>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn indigo lighten-2">
                                <span>Comprovante de porcentagem cumprida</span>
                                <input type="file" name="porcentagem" accept="application/pdf" required>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn indigo lighten-2">
                                <span>Foto 3x4</span>
                                <input type="file" name="foto" accept="image/jpg" required>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>

                        <b class="orange-text">Carta de recomendação</b>

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

                        <b class="orange-text">Declarações</b>

                        <div class="row">

                            <p>

                                <input type="checkbox" id="declaracao_1" name="declaracao_1" required="required"/>
                                <label for="declaracao_1">Declaro que possuo conhecimento das Resoluções da UEFS que 
                                    normatizam o intercâmbio (Resolução CONSEPE 16/2015, Resolução CONSEPE 17/2015 e Resolução CONSEPE 66/2016).</label>

                            </p>

                            <p>

                                <input type="checkbox" id="declaracao_2" name="declaracao_2" required="required"/>
                                <label for="declaracao_2">Declaro que possuo conhecimento de que a UEFS disponibiliza bolsas anuais (ver nº em edital específico) 
                                    para os estudantes em intercâmbio (valor: R$1.400,00) devendo o candidato se 
                                    responsabilizar pelas demais despesas (passagem aérea, visto, seguro saúde, etc). </label>

                            </p>

                        </div>
                        
                    

                        <div class="row">

                            <button class="btn waves-effect waves-light indigo lighten-2" type="submit" name="enviar">Enviar dados para análise
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
