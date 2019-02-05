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

function conexao() {
    $banco = 'mobilidadeout2';
    $usuario = 'root';
    $senha = '';
    $host = 'localhost';
    $conex = mysqli_connect($host, $usuario, $senha);
    mysqli_select_db($conex, $banco) or die("Não foi possivel conectar ao banco: ");
    mysqli_set_charset($conex, "utf8");
}

function conecta_insere($query) {

    $banco = 'mobilidadeout2';
    $usuario = 'root';
    $senha = '';
    $host = 'localhost';

    $conex = mysqli_connect($host, $usuario, $senha);

    mysqli_select_db($conex, $banco) or die("Não foi possivel conectar ao banco: ");
    mysqli_set_charset($conex, "utf8");

    if (mysqli_query($conex, $query) == FALSE) {
        return FALSE;
    } else {
        return mysqli_insert_id($conex);
    }

    mysqli_close($conex);
}

function conecta_seleciona($sql) {

    $banco = 'mobilidadeout2';
    $usuario = 'root';
    $senha = '';
    $host = 'localhost';
    $conex = mysqli_connect($host, $usuario, $senha);
    mysqli_select_db($conex, $banco) or die("Não foi possivel conectar ao banco: ");
    mysqli_set_charset($conex, "utf8");

    $result = mysqli_query($conex, $sql);

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    //printf("Result set has %d rows.\n", $row_cnt);

    mysqli_close($conex);
    return $result;
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

function download($arquivo) {
    header("Content-Type: application/force-download");
    header("Content-Type: application/octet-stream;");
    header("Content-Length:" . filesize($arquivo));
    header("Content-disposition: attachment; filename=" . $arquivo);
    header("Pragma: no-cache");
    header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
    header("Expires: 0");
    readfile($arquivo);
    flush();
}

?>
