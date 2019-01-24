<?php

function conexao() {
    $banco = 'mobilidadeout';
    $usuario = 'root';
    $senha = '';
    $host = 'localhost';
    $conex = mysqli_connect($host, $usuario, $senha);
    mysqli_select_db($conex, $banco) or die("Não foi possivel conectar ao banco: ");
    mysqli_set_charset($conex, "utf8");
    return $conex;
}

function conecta_insere($query) {

    $conex = conexao();

    if (mysqli_query($conex, $query) == FALSE) {
        return FALSE;
    }

    mysqli_close($conex);
}

function conecta_seleciona($sql) {

    $conex = conexao();

    $result = mysqli_query($conex, $sql);

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    //printf("Result set has %d rows.\n", $row_cnt);

    mysqli_close($conex);
    return $result;
}
?>

