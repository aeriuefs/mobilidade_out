<?php

session_start();

if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_uteis.php');

$edital = $_POST['edital'];
$matricula = $_POST['matricula'];
$avaliadores = $_POST['avaliadores'];
$escore = $_POST['escore'];
$posicao = $_POST['posicao'];



$query = "UPDATE candidaturas SET avaliador='" . $avaliadores . "', escore='" . $escore . "', posicao='" . $posicao . "',designado='1' WHERE matricula='" . $matricula . "' AND edital='" . $edital . "'";
conecta_insere($query);


echo "<script>alert('Seu pedido foi enviado com sucesso!');</script>";

header("refresh: 0; url=aeri_comissao_selec_edital_designacao.php");
?>