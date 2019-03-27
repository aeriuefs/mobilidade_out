<?php

require_once('funcoes_banco_de_dados.php');
require_once('funcoes_uteis.php');

verificar_sessao();

$matricula = $_POST['matricula'];
$senha = $_POST['senha'];

$query = "UPDATE candidatos SET senha='$senha' WHERE matricula='" . $matricula . "'";

conecta_insere($query);

echo "<script>alert('Seus dados foram atualizados com sucesso!');</script>";
header("refresh: 0; url=index.php");

?>

