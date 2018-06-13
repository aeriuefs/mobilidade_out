<?php

session_start();

if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_uteis.php');

$edital = $_POST['edital'];

$nome_opcao_1 = $_POST['nome_opcao_1'];
$curso_opcao_1 = $_POST['curso_opcao_1'];
$local_opcao_1 = $_POST['local_opcao_1'];

$nome_opcao_2 = $_POST['nome_opcao_2'];
$curso_opcao_2 = $_POST['curso_opcao_2'];
$local_opcao_2 = $_POST['local_opcao_2'];

$nome_opcao_3 = $_POST['nome_opcao_3'];
$curso_opcao_3 = $_POST['curso_opcao_3'];
$local_opcao_3 = $_POST['local_opcao_3'];

$nome_professor = $_POST['nome_professor'];
$email_professor = $_POST['email_professor'];
$departamento_professor = $_POST['departamento_professor'];


$query3 = "INSERT INTO candidato_opcao_universidade (matricula, edital, nome, curso, local) VALUES ('" . $_SESSION['matricula'] . "', '" . $edital . "', '" . $nome_opcao_1 . "', '" . $curso_opcao_1 . "',"
        . " '" . $local_opcao_1 . "')";

conecta_insere($query3);

$query4 = "INSERT INTO candidato_opcao_universidade (matricula, edital, nome, curso, local) VALUES ('" . $_SESSION['matricula'] . "', '" . $edital . "', '" . $nome_opcao_2 . "', '" . $curso_opcao_2 . "',"
        . " '" . $local_opcao_2 . "')";

conecta_insere($query4);

$query5 = "INSERT INTO candidato_opcao_universidade (matricula, edital, nome, curso, local) VALUES ('" . $_SESSION['matricula'] . "', '" . $edital . "', '" . $nome_opcao_3 . "', '" . $curso_opcao_3 . "',"
        . " '" . $local_opcao_3 . "')";

conecta_insere($query5);

$query6 = "INSERT INTO candidaturas (matricula, nome, edital, nome_professor_carta, email_professor_carta, departamento_professor_carta) VALUES ('" . $_SESSION['matricula'] . "', '" . $_SESSION['nome'] . "', '" . $edital . "', '" . $nome_professor . "', '" . $email_professor . "',"
        . " '" . $departamento_professor . "')";

conecta_insere($query6);

$data_atual = date('Y-m-d');

$query7 = "INSERT INTO historico_candidatos(matricula, edital, data) VALUES ('" . $_SESSION['matricula'] . "','" . $edital. "','" . $data_atual . "')";

conecta_insere($query7);

echo "<script>alert('Sua candidatura foi realizada com sucesso!');</script>";

header("refresh: 0; url=candidato_inscricoes.php");
?>