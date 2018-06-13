<!DOCTYPE html>
<?php
require_once('funcoes_uteis.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Teste</title>
    </head>
    <body>
        <?php
        
        $inicio = '23/02/1994';
        $fim = '2018-01-25';
        $data_hora = date("Y-m-d_H-i-sa");
        //echo (date_format(date($inicio), 'Y-m-d'));
        
        echo ($data_hora);
        
        ?>
    </body>
</html>
