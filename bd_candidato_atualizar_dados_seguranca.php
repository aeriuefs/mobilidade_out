<?php

require_once('funcoes_banco_de_dados.php');
require_once('funcoes_uteis.php');

verificar_sessao();

$senha_atual = $_POST['senha_atual'];
$senha_nova = $_POST['senha'];
$confirmar_senha = $_POST['confirmar_senha'];

if ($senha_atual == $_SESSION['senha']) {

    if ($senha_nova == $confirmar_senha) {

        $query = "UPDATE candidatos SET senha='$senha_nova' WHERE matricula='" . $_SESSION['matricula'] . "'";

        conecta_insere($query);
        
        $_SESSION['senha']= $senha_nova;
        echo "<script>alert('Seus dados foram atualizados com sucesso!');</script>";
        header("refresh: 0; url=candidato_atualizar_dados.php");
    } else {

        echo "<script>alert('A senha nova e a confirmação de senha não conferem!');</script>";
        header("refresh: 0; url=candidato_atualizar_dados_seguranca.php");
    }
} else {

    echo "<script>alert('Sua senha atual não confere!');</script>";
    header("refresh: 0; url=candidato_atualizar_dados_seguranca.php");
}
?>