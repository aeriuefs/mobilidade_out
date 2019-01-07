<?php

function criar_diretorio($diretorio) {

    if (file_exists($diretorio)) {

        return "diretorio_existe";
    } else {

        if (mkdir($diretorio, 0700)) {
            return "diretorio_criado";
        } else {
            return "diretorio_nao_criado";
        }
    }
}

function upload_arquivo($origem, $destino) {


    if (move_uploaded_file($origem, $destino)) {

        return TRUE;
        
    } else {

        return FALSE;
    }
}

?>
