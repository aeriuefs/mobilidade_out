<?php

session_start();

if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_uteis.php');

$matricula = $_POST['matricula'];
$senha = $_POST['senha'];
$nome_colaborador = $_POST['nome_colaborador'];
$email = $_POST['email'];
$tipo = $_POST['tipos'];

$query3 = "INSERT INTO servidores(matricula, senha, nome, email, tipo) VALUES ('" . $matricula . "','" . $senha . "','" . $nome_colaborador . "','" . $email . "','" . $tipo . "')";

conecta_insere($query3);


echo "<script>alert('Seu pedido foi enviado com sucesso!');</script>";

header("refresh: 0; url=aeri_home.php");
?>