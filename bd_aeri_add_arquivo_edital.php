<?php

require_once('sessao_aeri.php');
require_once ('funcoes_de_arquivos.php');

$edital = $_POST['edital'];
$nome_arquivo = $_POST['nome_arquivo'];

$novo_numero_edital = str_replace('/', '-', $edital);
$novo_nome_arquivo = str_replace(' ', '_', $nome_arquivo);


$uploaddir = 'arquivos/editais/' . $novo_numero_edital . '/arquivos_edital/';

criar_diretorio($uploaddir);

//Enviando arquivo

$destino = $uploaddir . $novo_nome_arquivo . '.pdf';

if (upload_arquivo($_FILES['arquivo']['tmp_name'], $destino)) {

    echo "<script>alert('Seu arquivo foi enviado com sucesso!');</script>";
} else {
    echo "<script>alert('Falha ao enviar arquivo!');</script>";
}

//header("refresh: 0; url=candidato_recursos.php");
?>