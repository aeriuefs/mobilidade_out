<?php

function conexao() {
    $banco = 'mobilidade';
    $usuario = 'mobilidade';
    $senha = 'aeri@uefs';
    $host = 'mysql.uefs.br';
    $conex = mysqli_connect($host, $usuario, $senha, $banco);
    mysqli_set_charset($conex, "utf8");
    return $conex;
}

function conexao2() {
    $banco = 'mobilidade';
    $usuario = 'root';
    $senha = '';
    $host = 'localhost';
    $conex = mysqli_connect($host, $usuario, $senha, $banco);
    mysqli_set_charset($conex, "utf8");
    return $conex;
}

function conecta_insere($query) {

    $conex = conexao();

    if (mysqli_connect_errno()) {
        echo "Falha na conexão com o servido MySQL:  " . mysqli_connect_error();
    }

    if (mysqli_query($conex, $query) == FALSE) {
        //echo "Nao inseriu :" . mysqli_error();
        return FALSE;
    } else {
        //echo "Inseriu.";
        return mysqli_insert_id($conex);
    }

    mysqli_close($conex);
}

function conecta_seleciona($query) {

    $conex = conexao();

    if (mysqli_connect_errno()) {
        echo "Falha na conexão com o servido MySQL:  " . mysqli_connect_error();
    }

    $result = mysqli_query($conex, $query);

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    //printf("Result set has %d rows.\n", $row_cnt);

    mysqli_close($conex);
    return $result;
}
?>

