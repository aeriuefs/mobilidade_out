<?php

session_start();

if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_banco_de_dados.php');
require_once('funcoes_uteis.php');

$edital = $_POST['edital'];
$matricula = $_POST['matricula'];
$informacao = $_POST['informacao'];
$codigo = $_POST['codigo'];
$data = date("Y/m/d");

if ($codigo == 1) {
    $titulo = "Inscricao em Analise";
    $cabe_recurso = "N";
} else if ($codigo == 2) {
    $titulo = "Inscricao Homologada";
    $cabe_recurso = "N";
} else if ($codigo == 3) {
    $titulo = "Inscricao nao Homologada";
    $cabe_recurso = "S";
} else if ($codigo == 4) {
    $titulo = "Inscricao homologada (Recurso)";
    $cabe_recurso = "N";
} else if ($codigo == 5) {
    $titulo = "Inscricao nao homologada (Recurso)";
    $cabe_recurso = "N";
} else if ($codigo == 6) {
    $titulo = "Candidato aprovado proficiencia";
    $cabe_recurso = "N";
} else if ($codigo == 7) {
    $titulo = "Candidato reprovado proficiencia";
    $cabe_recurso = "S";
} else if ($codigo == 8) {
    $titulo = "Candidato aprovado proficiencia (Recurso)";
    $cabe_recurso = "N";
} else if ($codigo == 9) {
    $titulo = "Candidato reprovado proficiencia (Recurso)";
    $cabe_recurso = "N";
} else if ($codigo == 10) {
    $titulo = "Candidato aprovado CCint";
    $cabe_recurso = "N";
} else if ($codigo == 11) {
    $titulo = "Candidato reprovado CCint";
    $cabe_recurso = "S";
} else if ($codigo == 12) {
    $titulo = "Candidato aprovado CCint (Recurso)";
    $cabe_recurso = "N";
} else if ($codigo == 13) {
    $titulo = "Candidato reprovado CCint (Recurso)";
    $cabe_recurso = "N";
} else if ($codigo == 14) {
    $titulo = "Inscricao aprovada em Intercambio";
    $cabe_recurso = "N";
} else if ($codigo == 15) {
    $titulo = "Inscricao reprovada em Intercambio";
    $cabe_recurso = "N";
}

$query = "INSERT INTO historico_candidatos(matricula, edital, data, codigo, titulo, informacao, cabe_recurso) VALUES ('" . $matricula . "','" . $edital . "','" . $data . "','" . $codigo . "','" . $titulo . "','" . $informacao . "','" . $cabe_recurso . "')";
conecta_insere($query);

$query2 = "UPDATE candidaturas SET situacao_atual='" . $codigo . "'  WHERE matricula='" . $matricula . "' AND edital='" . $edital . "'";
conecta_insere($query2);

echo "<script>alert('Seu pedido foi enviado com sucesso!');</script>";

header("refresh: 0; url=aeri_avaliacao_candidaturas.php");
?>