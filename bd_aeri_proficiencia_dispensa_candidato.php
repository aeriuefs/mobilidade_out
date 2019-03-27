<?php

session_start();

if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_banco_de_dados.php');
require_once('funcoes_uteis.php');

$edital = $_POST['edital'];

$local_ingles = $_POST['local_ingles'];
$data_ingles = $_POST['data_ingles'];
$local_espanhol = $_POST['local_espanhol'];
$data_espanhol = $_POST['data_espanhol'];
$local_frances = $_POST['local_frances'];
$data_frances = $_POST['data_frances'];
//$ingles = $_POST['ingles'];
//$espanhol = $_POST['espanhol'];
//$frances = $_POST['frances'];

if (!empty($_POST['ingles'])) {
    foreach ($_POST['ingles'] as $value) {

        $query2 = "INSERT INTO provas_proficiencia(matricula, edital, prova, data, local) VALUES ('" . $value . "','" . $edital . "','" . 'Ingles' . "','" . $data_ingles . "','" . $local_ingles . "')";
        conecta_insere($query2);
    }
}

if (!empty($_POST['espanhol'])) {
    foreach ($_POST['espanhol'] as $value) {

        $query2 = "INSERT INTO provas_proficiencia(matricula, edital, prova, data, local) VALUES ('" . $value . "','" . $edital . "','" . 'Espanhol' . "','" . $data_espanhol . "','" . $local_espanhol . "')";
        conecta_insere($query2);
    }
}

if (!empty($_POST['frances'])) {
    foreach ($_POST['frances'] as $value) {

        $query2 = "INSERT INTO provas_proficiencia(matricula, edital, prova, data, local) VALUES ('" . $value . "','" . $edital . "','" . 'Frances' . "','" . $data_frances . "','" . $local_frances . "')";
        conecta_insere($query2);
    }
}

echo "<script>alert('Seu pedido foi enviado com sucesso!');</script>";

//header("refresh: 0; url=candidato_recursos.php");
?>