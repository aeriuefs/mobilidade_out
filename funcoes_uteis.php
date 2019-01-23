<?php

function conexao() {
    $banco = 'mobilidadeout';
    $usuario = 'root';
    $senha = '';
    $host = 'localhost';
    $conex = mysqli_connect($host, $usuario, $senha);
    mysqli_select_db($conex, $banco) or die("Não foi possivel conectar ao banco: ");
    mysqli_set_charset($conex, "utf8");
}

function conecta_insere($query) {

    $banco = 'mobilidadeout';
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

    $banco = 'mobilidadeout';
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
