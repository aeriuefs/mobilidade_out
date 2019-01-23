<?php

require_once('sessao_aeri.php');
require_once ('funcoes_de_arquivos.php');

$numero_edital = $_POST['numero_edital'];
$tipo_intercambio = "AERI/UEFS";
$codigo = "1";
$numero_vagas = $_POST['numero_vagas'];
$novo_numero_edital = str_replace('/', '-', $numero_edital);
$inicio_inscricao = $_POST['inicio_inscricao'];
$fim_inscricao = $_POST['fim_inscricao'];
$homologacao_inscricoes = $_POST['homologacao_inscricoes'];
$inicio_recurso_inscricao = $_POST['inicio_recurso_inscricao'];
$fim_recurso_inscricao = $_POST['fim_recurso_inscricao'];
$homologacao_final = $_POST['homologacao_final'];
$inicio_proficiencia = $_POST['inicio_proficiencia'];
$fim_proficiencia = $_POST['fim_proficiencia'];
$aprovados_primeira_fase = $_POST['aprovados_primeira_fase'];
$inicio_recurso_primeira_fase = $_POST['inicio_recurso_primeira_fase'];
$fim_recurso_primeira_fase = $_POST['fim_recurso_primeira_fase'];
$resultado_final_primeira_fase = $_POST['resultado_final_primeira_fase'];
$inicio_classificacao = $_POST['inicio_classificacao'];
$fim_classificacao = $_POST['fim_classificacao'];
$resultado_segunda_fase = $_POST['resultado_segunda_fase'];
$inicio_recurso_segunda_fase = $_POST['inicio_recurso_segunda_fase'];
$fim_recurso_segunda_fase = $_POST['fim_recurso_segunda_fase'];
$resultado_final_segunda_fase = $_POST['resultado_final_segunda_fase'];
$reuniao_esclarecimentos = $_POST['reuniao_esclarecimentos'];
$inicio_entrega_documentos = $_POST['inicio_entrega_documentos'];
$fim__entrega_documentos = $_POST['fim__entrega_documentos'];
$inicio_avaliacao_documentos = $_POST['inicio_avaliacao_documentos'];
$fim_avaliacao_documentos = $_POST['fim_avaliacao_documentos'];
$envio_candidaturas_correio = $_POST['envio_candidaturas_correio'];
$inicio_recepcao_carta = $_POST['inicio_recepcao_carta'];
$fim_recepcao_carta = $_POST['fim_recepcao_carta'];
$divulgacao_resultado_terceira_fase = $_POST['divulgacao_resultado_terceira_fase'];
$inicio_aquisicoes = $_POST['inicio_aquisicoes'];
$fim_aquisicoes = $_POST['fim_aquisicoes'];

//Criando diretorios
$diretorio_pai = 'arquivos/editais/' . $novo_numero_edital . '/';

criar_diretorio($diretorio_pai);

$uploaddir = 'arquivos/editais/' . $novo_numero_edital . '/arquivos_edital/';

criar_diretorio($uploaddir);

$caminho2 = 'arquivos/editais/' . $novo_numero_edital . '/candidatos/';

criar_diretorio($caminho2);

//Enviando arquivo

$destino = $uploaddir . $novo_numero_edital . '.pdf';

if (upload_arquivo($_FILES['arquivo']['tmp_name'], $destino)) {

//Salvando dados no banco

    $query = "INSERT INTO editais(numero_edital, tipo_intercambio, codigo, numero_vagas, "
            . "inicio_inscricao, fim_inscricao, homologacao_inscricoes, inicio_recurso_inscricao, "
            . "fim_recurso_inscricao, homologacao_final, inicio_proficiencia, fim_proficiencia, "
            . "aprovados_primeira_fase, inicio_recurso_primeira_fase, fim_recurso_primeira_fase,"
            . " resultado_final_primeira_fase, inicio_classificacao, fim_classificacao, "
            . "resultado_segunda_fase, inicio_recurso_segunda_fase, fim_recurso_segunda_fase, "
            . "resultado_final_segunda_fase, reuniao_esclarecimentos, inicio_entrega_documentos, "
            . "fim__entrega_documentos, inicio_avaliacao_documentos, fim_avaliacao_documentos, envio_candidaturas_correio, "
            . "inicio_recepcao_carta, fim_recepcao_carta, divulgacao_resultado_terceira_fase, inicio_aquisicoes, "
            . "fim_aquisicoes) VALUES ('" . $numero_edital . "','" . $tipo_intercambio . "',"
            . "'" . $codigo . "','" . $numero_vagas . "','" . $inicio_inscricao . "','" . $fim_inscricao . "'"
            . ",'" . $homologacao_inscricoes . "','" . $inicio_recurso_inscricao . "','" . $fim_recurso_inscricao . "'"
            . ",'" . $homologacao_final . "','" . $inicio_proficiencia . "','" . $fim_proficiencia . "',"
            . "'" . $aprovados_primeira_fase . "','" . $inicio_recurso_primeira_fase . "',"
            . "'" . $fim_recurso_primeira_fase . "','" . $resultado_final_primeira_fase . "',"
            . "'" . $inicio_classificacao . "','" . $fim_classificacao . "','" . $resultado_segunda_fase . "',"
            . "'" . $inicio_recurso_segunda_fase . "','" . $fim_recurso_segunda_fase . "','" . $resultado_segunda_fase . "'"
            . ",'" . $reuniao_esclarecimentos . "','" . $inicio_entrega_documentos . "','" . $fim__entrega_documentos . "','" . $inicio_avaliacao_documentos . "','" . $fim_avaliacao_documentos . "','" . $envio_candidaturas_correio . "','" . $inicio_recepcao_carta . "','" . $fim_recepcao_carta . "','" . $divulgacao_resultado_terceira_fase . "','" . $inicio_aquisicoes . "','" . $fim_aquisicoes . "')";

    conecta_insere($query);

    $recurso = "INSERT INTO recursos(edital, data_inicio, data_fim, codigo_referencia) VALUES ('" . $novo_numero_edital . "','" . $inicio_recurso_inscricao . "','" . $fim_recurso_inscricao . "','" . '3' . "')";
    conecta_insere($recurso);

    $recurso = "INSERT INTO recursos(edital, data_inicio, data_fim, codigo_referencia) VALUES ('" . $novo_numero_edital . "','" . $inicio_recurso_primeira_fase . "','" . $fim_recurso_primeira_fase . "','" . '7' . "')";
    conecta_insere($recurso);

    $recurso = "INSERT INTO recursos(edital, data_inicio, data_fim, codigo_referencia) VALUES ('" . $novo_numero_edital . "','" . $inicio_recurso_segunda_fase . "','" . $fim_recurso_segunda_fase . "','" . '11' . "')";
    conecta_insere($recurso);
}

echo "<script>alert('o edital foi cadastrado com sucesso!');</script>";

header("refresh: 0; url=aeri_editais.php");
?>