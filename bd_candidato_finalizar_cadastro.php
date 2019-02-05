<?php

require_once('funcoes_uteis.php');

verificar_sessao();

require_once('funcoes_de_arquivos.php');

$banco = isset($_POST['banco']) ? $_POST['banco'] : "";
$agencia = isset($_POST['agencia']) ? $_POST['agencia'] : "";
$conta = isset($_POST['conta']) ? $_POST['conta'] : "";
$passaporte = isset($_POST['passaporte']) ? $_POST['passaporte'] : "";

$query = "UPDATE candidatos SET banco='" . $banco . "',agencia='" . $agencia . "',conta='" . $conta . "',passaporte='" . $passaporte . "' WHERE matricula='". $_SESSION['matricula'] . "'";

conecta_insere($query);
echo "<script>alert('Seus dados foram atualizados com sucesso!');</script>";
header("refresh: 0; url=candidato_documentos.php");
?>