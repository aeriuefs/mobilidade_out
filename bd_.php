<?php

session_start();

if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_uteis.php');

$edital = $_GET['edital'];

$explanacao = $_GET['explanacao'];
$arquivo = $_GET['arquivo'];
$data = date("Y/m/d");;


$query3 = "INSERT INTO candidato_recursos(matricula, edital, data, justificativa) VALUES ('" . $_SESSION['matricula'] . "','" . $edital . "','" . $data . "','')";

conecta_insere($query3);


echo "<script>alert('Seu pedido foi enviado com sucesso!');</script>";

header("refresh: 0; url=candidato_recursos.php");
?>