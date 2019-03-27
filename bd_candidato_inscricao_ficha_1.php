<?php

require_once('funcoes_banco_de_dados.php');
require_once('funcoes_uteis.php');

verificar_sessao();

require_once('funcoes_de_arquivos.php');

$edital = $_POST['edital'];

$nome_opcao_1 = $_POST['nome_opcao_1'];
$curso_opcao_1 = $_POST['curso_opcao_1'];
$local_opcao_1 = $_POST['local_opcao_1'];

$nome_opcao_2 = $_POST['nome_opcao_2'];
$curso_opcao_2 = $_POST['curso_opcao_2'];
$local_opcao_2 = $_POST['local_opcao_2'];

$nome_opcao_3 = $_POST['nome_opcao_3'];
$curso_opcao_3 = $_POST['curso_opcao_3'];
$local_opcao_3 = $_POST['local_opcao_3'];

$nome_professor = $_POST['nome_professor'];
$email_professor = $_POST['email_professor'];
$departamento_professor = $_POST['departamento_professor'];


$query3 = "INSERT INTO candidato_opcao_universidade (matricula, edital, nome, curso, local) VALUES ('" . $_SESSION['matricula'] . "', '" . $edital . "', '" . $nome_opcao_1 . "', '" . $curso_opcao_1 . "',"
        . " '" . $local_opcao_1 . "')";

conecta_insere($query3);

$query4 = "INSERT INTO candidato_opcao_universidade (matricula, edital, nome, curso, local) VALUES ('" . $_SESSION['matricula'] . "', '" . $edital . "', '" . $nome_opcao_2 . "', '" . $curso_opcao_2 . "',"
        . " '" . $local_opcao_2 . "')";

conecta_insere($query4);

$query5 = "INSERT INTO candidato_opcao_universidade (matricula, edital, nome, curso, local) VALUES ('" . $_SESSION['matricula'] . "', '" . $edital . "', '" . $nome_opcao_3 . "', '" . $curso_opcao_3 . "',"
        . " '" . $local_opcao_3 . "')";

conecta_insere($query5);

$query6 = "INSERT INTO candidaturas (matricula, nome, edital, nome_professor_carta, email_professor_carta, departamento_professor_carta) VALUES ('" . $_SESSION['matricula'] . "', '" . $_SESSION['nome'] . "', '" . $edital . "', '" . $nome_professor . "', '" . $email_professor . "',"
        . " '" . $departamento_professor . "')";

conecta_insere($query6);

$data_atual = date('Y-m-d');

$query7 = "INSERT INTO historico_candidatos(matricula, edital, data) VALUES ('" . $_SESSION['matricula'] . "','" . $edital . "','" . $data_atual . "')";

conecta_insere($query7);

$query8 = "INSERT INTO notificacoes(destinatario, remetente, mensagem, status, data) VALUES ('00000000','" . $_SESSION['matricula'] . "','Nova candidatura no edital " . $edital . ". ','0','" . $data_atual . "')";

conecta_insere($query8);

//echo "<script>alert('Sua candidatura foi realizada com sucesso!');</script>";

$caminho_edital = str_replace('/', '-', $edital);
$caminho1 = __DIR__ .DIRECTORY_SEPARATOR.'arquivos'.DIRECTORY_SEPARATOR.'editais' .DIRECTORY_SEPARATOR . $caminho_edital . DIRECTORY_SEPARATOR . 'candidatos' .DIRECTORY_SEPARATOR . $_SESSION['matricula'] . DIRECTORY_SEPARATOR;
$caminho2 = __DIR__ . DIRECTORY_SEPARATOR.'arquivos'.DIRECTORY_SEPARATOR.'editais'  .DIRECTORY_SEPARATOR . $caminho_edital . DIRECTORY_SEPARATOR .'candidatos' .DIRECTORY_SEPARATOR . $_SESSION['matricula'] . DIRECTORY_SEPARATOR . 'arquivos_inscricao' . DIRECTORY_SEPARATOR;
$caminho3 = __DIR__ . DIRECTORY_SEPARATOR.'arquivos'.DIRECTORY_SEPARATOR.'editais' .DIRECTORY_SEPARATOR . $caminho_edital . DIRECTORY_SEPARATOR .'candidatos' .DIRECTORY_SEPARATOR . $_SESSION['matricula'] . DIRECTORY_SEPARATOR .'documentos' . DIRECTORY_SEPARATOR;
$caminho4 = __DIR__ . DIRECTORY_SEPARATOR.'arquivos'.DIRECTORY_SEPARATOR.'editais' .DIRECTORY_SEPARATOR . $caminho_edital . DIRECTORY_SEPARATOR .'candidatos'.DIRECTORY_SEPARATOR . $_SESSION['matricula'] . DIRECTORY_SEPARATOR .'recurso' . DIRECTORY_SEPARATOR;
$caminho5 = __DIR__ . DIRECTORY_SEPARATOR.'arquivos'.DIRECTORY_SEPARATOR.'editais' .DIRECTORY_SEPARATOR . $caminho_edital . DIRECTORY_SEPARATOR . 'candidatos' .DIRECTORY_SEPARATOR . $_SESSION['matricula'] . DIRECTORY_SEPARATOR .'certificados' . DIRECTORY_SEPARATOR;
criar_diretorio($caminho1);
criar_diretorio($caminho2);
criar_diretorio($caminho3);
criar_diretorio($caminho4);
criar_diretorio($caminho5);

$destino = $caminho2 . 'plano_trabalho_opcao_1.pdf';
echo $destino;
echo $_FILES['plano_trabalho_opcao_1']['tmp_name'];
upload_arquivo($_FILES['plano_trabalho_opcao_1']['tmp_name'], $destino);

$destino = $caminho2 . 'plano_estudo_opcao_1.pdf';
upload_arquivo($_FILES['plano_estudo_opcao_1']['tmp_name'], $destino);

$destino = $caminho2 . 'plano_trabalho_opcao_2.pdf';
upload_arquivo($_FILES['plano_trabalho_opcao_2']['tmp_name'], $destino);

$destino = $caminho2 . 'plano_estudo_opcao_2.pdf';
upload_arquivo($_FILES['plano_estudo_opcao_2']['tmp_name'], $destino);

$destino = $caminho2 . 'plano_trabalho_opcao_3.pdf';
upload_arquivo($_FILES['plano_trabalho_opcao_3']['tmp_name'], $destino);

$destino = $caminho2 . 'plano_estudo_opcao_3.pdf';
upload_arquivo($_FILES['plano_estudo_opcao_3']['tmp_name'], $destino);

$destino = $caminho2 . 'curriculo_lattes.pdf';
upload_arquivo($_FILES['curriculo_lattes']['tmp_name'], $destino);

$destino = $caminho2 . 'guia_matricula.pdf';
upload_arquivo($_FILES['guia_matricula']['tmp_name'], $destino);

$destino = $caminho2 . 'historico.pdf';
upload_arquivo($_FILES['historico']['tmp_name'], $destino);

$destino = $caminho2 . 'porcentagem.pdf';
upload_arquivo($_FILES['porcentagem']['tmp_name'], $destino);

$destino = $caminho2 . 'foto.jpg'; //aceitar outras 
upload_arquivo($_FILES['foto']['tmp_name'], $destino);

//Certificados 

upload_multiplos_arquivo($_FILES['certificados'], $caminho5);



header("refresh: 0; url=candidato_inscricoes.php");
?>