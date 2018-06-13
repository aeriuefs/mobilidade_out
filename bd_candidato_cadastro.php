<?php

require_once('funcoes_uteis.php');

$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$orgao_expedidor = $_POST['orgao_expedidor'];
$data_nascimento = $_POST['data_nascimento'];
$sexo = $_POST['sexo'];
$senha = $_POST['senha'];


$query = "INSERT INTO candidatos(matricula, senha, nome, data_nascimento, sexo, cpf, rg, orgao_expedidor, email) VALUES ('" . $matricula . "','" . $senha . "','" . $nome . "','" . $data_nascimento . "','" . $sexo . "','" . $cpf . "','" . $rg . "','" . $orgao_expedidor . "','" . $email . "')";

conecta_insere($query);
echo "<script>alert('Seus cadastro foi realido com sucesso!');</script>";
header("refresh: 0; url=index.php");
?>