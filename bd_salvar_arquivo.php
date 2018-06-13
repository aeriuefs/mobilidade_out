<?php

session_start();

$edital = $_POST['edital'];
$data_atual = date("Y-m-d_H-i-sa");
$tipo_arquivo = str_replace(' ', '_', $_POST['tipo_arquivo']);
$caminho_edital = str_replace('/', '-', $edital);

$uploaddir = 'arquivos/editais/' . $caminho_edital . '/candidatos/' . $_SESSION['matricula'] . '/';

$uploadfile = $uploaddir . $_FILES['arquivo']['name'];

$novo = $uploaddir . $tipo_arquivo . '_' .$data_atual . '.pdf';

if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $novo)) {

    echo "<script>alert('Arquivo Enviado!');</script>";
} else {

    echo "<script>alert(Arquivo não enviado!');</script>";
}

header("refresh: 0; url=candidato_documentos.php");
?>