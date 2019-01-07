<?php

session_start();
if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_uteis.php');

$banco = $_POST['banco'];
$agencia = $_POST['agencia'];
$conta = $_POST['conta'];
$passaporte = $_POST['passaporte'];

$query = "UPDATE candidatos SET banco='" . $banco . "',agencia='" . $agencia . "',conta='" . $conta . "',passaporte='" . $passaporte . "' WHERE matricula='". $_SESSION['matricula'] . "'";

conecta_insere($query);
echo "<script>alert('Seus dados foram atualizados com sucesso!');</script>";
header("refresh: 0; url=candidato_atualizar_dados.php");
?>