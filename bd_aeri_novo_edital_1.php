<?php

require_once('sessao_aeri.php');

$numero_edital = $_POST['numero_edital'];
$tipo = $_POST['tipo'];
$vagas = $_POST['vagas'];
$data_inicio = $_POST['data_inicio'];
$data_encerramento = $_POST['data_encerramento'];

$novo_numero_edital = str_replace('/', '-', $numero_edital);

//Diretorio futuro
$diretorio_pai = 'arquivos/editais/' . $novo_numero_edital . '/' ;

mkdir($diretorio_pai, 0700);

$uploaddir = 'arquivos/editais/' . $novo_numero_edital . '/arquivos_edital/' ;

mkdir($uploaddir, 0700);

$uploadfile = $uploaddir . $_FILES['arquivo']['name'];

$novo = $uploaddir . $novo_numero_edital . '.pdf';

if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $novo)) {

    echo "<script>alert('Arquivo Enviado!');</script>";

   
} else {

    echo "<script>alert(Arquivo não enviado!');</script>";
}

//$query3 = "INSERT INTO candidato_recursos(matricula, edital, data, justificativa) VALUES ('" . $_SESSION['matricula'] . "','" . $edital . "','" . $data . "','')";

//conecta_insere($query3);


echo "<script>alert('Seu pedido foi enviado com sucesso!');</script>";

//header("refresh: 0; url=candidato_recursos.php");
?>