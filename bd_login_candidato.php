<?php

session_start();

require_once('funcoes_uteis.php');

$matricula = $_POST['matricula'];
$senha = $_POST['senha'];

$query = "SELECT matricula, senha, nome FROM candidatos WHERE matricula='$matricula' AND senha='$senha'";

$result = conecta_seleciona($query);
$row = mysqli_fetch_row($result);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['matricula'] = $matricula;
    $_SESSION['senha'] = $senha;
    $_SESSION['nome'] = $row[2];
    $_SESSION['novas_notificacoes'] = 4;
    header('location:candidato_home.php');
    echo $_SESSION['nome'];
} else {
    
    header('location:index.php');
}
?>