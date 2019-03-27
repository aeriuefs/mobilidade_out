<!DOCTYPE html>
<?php
require_once('funcoes_banco_de_dados.php');
require_once('funcoes_uteis.php');

$query6 = "INSERT INTO candidaturas (matricula, nome, edital, nome_professor_carta, email_professor_carta, departamento_professor_carta) VALUES ('11111161', 'Julio', '10/2018', 'Augusto', 'Augusto@uefs','DTEC')";


$query = "SELECT * FROM candidaturas";
$resultado = conecta_seleciona($query);

$row_cnt = mysqli_num_rows($resultado);
printf("Result set has %d rows.<br/>", $row_cnt);

$i = 1;
while ($res = mysqli_fetch_assoc($resultado)) {
    //echo( $i . ' - ' . $res['id'] . ' - ' . $res['matricula'] . ' - ' . $res['nome'] . ' - ' . $res['email'] . ' - ' . $res['curso'] . '<br/>');
    echo( $i . ' - ' . $res['id'] . ' - ' . $res['matricula'] . ' - ' . $res['nome'] . '<br/>');
   //echo( $i . ' - ' . $res['id'] . ' - ' . $res['titulo'] . '<br/>');
    $i++;
}
?>
