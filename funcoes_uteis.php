<?php

function verificar_sessao() {

    session_start();

    if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
        unset($_SESSION['matricula']);
        unset($_SESSION['senha']);
        header('location:index.php');
    }
}

function notificacoes() {

    $query_n = "SELECT * FROM notificacoes WHERE destinatario='" . $_SESSION['matricula'] . "' AND status='0'";

    $resultado_n = conecta_seleciona($query_n);

    return mysqli_num_rows($resultado_n);
}

function porcentagem($porcentagem, $total) {
    return ( $porcentagem / 100 ) * $total;
}

function data_no_intervalor($inicio, $fim) {

    $data_atual = date("Y/m/d");

    if (strtotime($data_atual) >= strtotime($inicio) && strtotime($data_atual) <= strtotime($fim)) {

        return 1;
    } else {

        return 0;
    }
}

function formatar_data($data) {

    return date('d/m/Y', strtotime($data));
}

function recurpera_candidato() {

    header("refresh: 0; url=candidato_home.php");
}


?>
