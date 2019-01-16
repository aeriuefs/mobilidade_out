<?php

session_start();

if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_uteis.php');

$edital = $_POST['edital'];

$explanacao = $_POST['explanacao'];
$arquivo = $_POST['arquivo'];
$data = date("Y/m/d"); 

/*{
    $tipo_arquivo = str_replace(' ', '_', $_POST['tipo_arquivo']);
    $caminho_edital = str_replace('/', '-', $edital);

    $uploaddir = 'arquivos/editais/' . $caminho_edital . '/candidatos/' . $_SESSION['matricula'] . '/recursos';

    $uploadfile = $uploaddir . $_FILES['arquivo']['name'];

    $novo = $uploaddir . $tipo_arquivo . '_' . $data_atual . '.pdf';

    if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $novo)) {

        echo "<script>alert('Arquivo Enviado!');</script>";
    } else {

        echo "<script>alert(Arquivo não enviado!');</script>";
    }
}*/

$query3 = "INSERT INTO candidato_recursos(matricula, edital, data, explanacao) VALUES ('" . $_SESSION['matricula'] . "','" . $edital . "','" . $data . "','" . $explanacao . "')";

conecta_insere($query3);

echo "<script>alert('Seu pedido foi enviado com sucesso!');</script>";

header("refresh: 0; url=candidato_recursos.php");
?>