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
$informacao = $_POST['informacao'];
$novo_status = $_POST['novo_status'];
$data = date('y-m-d'); $titulo; $codigo; $cabe_recurso;


$query = "SELECT * FROM status_inscricao WHERE id = '" . $novo_status . "'";
$resultado = conecta_seleciona($query);
while ($res = mysqli_fetch_assoc($resultado)) {

    $titulo = $res['titulo'];
    $codigo = $res['id'];
    $cabe_recurso = $res['cabe_recurso'];
}

if (!empty($_POST['selecionados'])) {
    foreach ($_POST['selecionados'] as $value) {

        $query = "UPDATE candidaturas SET situacao_atual='$novo_status' WHERE matricula='" . $value . "' AND edital ='" . $edital . "'";

        conecta_insere($query);

        $query2 = "INSERT INTO historico_candidatos(matricula, edital, data, codigo, titulo, informacao, cabe_recurso) VALUES ('" . $value . "','" . $edital . "','" . $data . "','" . $codigo . "','" . $titulo . "','" . $informacao . "','" . $cabe_recurso . "')";

        conecta_insere($query2);
    }
}



echo "<script>alert('Seu pedido foi enviado com sucesso!');</script>";

header("refresh: 0; url=aeri_avaliacao_menu.php");
?>