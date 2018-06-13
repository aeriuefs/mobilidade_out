<?php

$uploaddir = 'arquivos/';

$uploadfile = $uploaddir . $_FILES['arquivo']['name'];

if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)) {
    echo "Arquivo Enviado";
} else {
    echo "Arquivo não enviado";
}
?>
