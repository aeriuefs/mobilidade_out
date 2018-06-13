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

$query = "INSERT INTO candidato_dados_bancarios(matricula, banco, agencia, conta) VALUES ('" . $_SESSION['matricula'] . "','" . $banco . "','" . $agencia . "','" . $conta . "')";

conecta_insere($query);
echo "<script>alert('Seus dados foram salvos com sucesso!');</script>";
header("refresh: 0; url=candidato_atualizar_dados.php");
?>