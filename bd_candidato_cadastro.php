<?php

require_once('funcoes_uteis.php');

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$matricula = $_POST['matricula'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$orgao_expedidor = $_POST['orgao_expedidor'];
$sexo = $_POST['sexo'];
$data_nascimento = $_POST['data_nascimento'];
$telefone = isset($_POST["telefone_fixo"]) ? $_POST["telefone_fixo"] : "NULL";
$celular = isset($_POST["celular"]) ? $_POST["celular"] : "NULL";
$forma_ingresso = isset($_POST["forma_ingresso"]) ? $_POST["forma_ingresso"] : "0";
$aluno_residente = isset($_POST["aluno_residente"]) ? $_POST["aluno_residente"] : "0";
$curso = $_POST["curso"];

$query = "INSERT INTO candidatos(matricula, senha, nome, data_nascimento, telefone, celular, sexo, cpf, rg, orgao_expedidor, email, forma_ingresso, aluno_residente, curso) VALUES ('" . $matricula . "','" . $senha . "','" . $nome . "','" . $data_nascimento . "','" . $telefone . "','" . $celular . "','" . $sexo . "','" . $cpf . "','" . $rg . "','" . $orgao_expedidor . "','" . $email . "','" . $forma_ingresso . "','" . $aluno_residente . "','" . $curso . "')";

if (conecta_insere($query)==FALSE) {
    echo "<script>alert('Erro ao tentar realizar cadastro.');</script>";
} else {
    echo "<script>alert('Seu cadastro foi realizado com sucesso!');</script>";
}
header("refresh: 0; url=index.php");
?>