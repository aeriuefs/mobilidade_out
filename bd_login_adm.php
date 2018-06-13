<?php

session_start();

require_once('funcoes_uteis.php');

$matricula = $_POST['matricula'];
$senha = $_POST['senha'];

$query = "SELECT matricula, senha, nome, tipo FROM servidores WHERE matricula='$matricula' AND senha='$senha'";

$result = conecta_seleciona($query);
$row = mysqli_fetch_row($result);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['matricula'] = $matricula;
    $_SESSION['senha'] = $senha;
    $_SESSION['nome'] = $row[2];
    $_SESSION['novas_notificacoes'] = 4;
    $_SESSION['tipo'] = $row[3];

    if ($_SESSION['tipo'] == '1' || $_SESSION['tipo'] == '2') {

        header('location:aeri_home.php');
    } elseif ($_SESSION['tipo'] == '3') {

        header('location:comissao_home.php');
    } elseif ($_SESSION['tipo'] == '4') {

        header('location:colegiado_home.php');
    } else {

        echo ("Tipo não identificado");
    }
} else {

    header('location:aeri_login_administrativo.php');
}
?>