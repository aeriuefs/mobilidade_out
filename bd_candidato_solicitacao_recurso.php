<?php

session_start();

if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_uteis.php');
require_once('funcoes_de_arquivos.php');


$edital = $_POST['edital'];

$explanacao = $_POST['explanacao'];
$data = date("Y/m/d");

$query3 = "INSERT INTO candidato_recursos(matricula, edital, data, explanacao) VALUES ('" . $_SESSION['matricula'] . "','" . $edital . "','" . $data . "','" . $explanacao . "')";

$id = conecta_insere($query3);

//Salvando arquivo

$uploaddir = 'arquivos/editais/' . str_replace('/', '-', $edital) . '/candidatos/' . $_SESSION['matricula'] . '/recurso/';

$uploadfile = $uploaddir . $_FILES['arquivo']['name'];

$novo = $uploaddir . 'recurso' . '_' . $id . '.pdf';

if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $novo)) {

    echo "<script>alert('Arquivo Enviado!');</script>";
} else {

    echo "<script>alert(Arquivo não enviado!');</script>";
}

echo "<script>alert('Seu pedido foi enviado com sucesso!');</script>";

header("refresh: 0; url=candidato_recursos.php");
?>