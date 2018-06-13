<?php

session_start();
if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_uteis.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$orgao_expedidor = $_POST['orgao_expedidor'];
$sexo = $_POST['sexo'];
$data_nascimento = $_POST['data_nascimento'];
$telefone = isset($_POST["telefone"]) ? $_POST["telefone"] : "NULL";
$passaporte = isset($_POST["passaporte"]) ? $_POST["passaporte"] : "NULL";
$forma_ingresso = isset($_POST["forma_ingresso"]) ? $_POST["forma_ingresso"] : "0";
$aluno_residente = isset($_POST["aluno_residente"]) ? $_POST["aluno_residente"] : "0";
$curso = $_POST["curso"];

$query = "UPDATE candidatos SET nome='$nome', email='$email', cpf='$cpf', rg='$rg', orgao_expedidor='$orgao_expedidor', sexo='$sexo', data_nascimento='$data_nascimento', telefone='$telefone', passaporte='$passaporte', forma_ingresso='$forma_ingresso', aluno_residente='$aluno_residente', curso='$curso'  WHERE matricula='" . $_SESSION['matricula'] . "'";

conecta_insere($query);
echo "<script>alert('Seus dados foram atualizados com sucesso!');</script>";
header("refresh: 0; url=candidato_atualizar_dados.php");
?>