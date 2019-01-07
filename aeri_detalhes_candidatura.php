<?php
session_start();
if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_uteis.php');

$edital = $_POST['edital'];
$matricula = $_POST['matricula'];
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <header>
        <?php
        include("topo_pagina.php");
        ?>
    </header>
</head>
<body>

    <header>
        <?php
        include("navbar_aeri.php");
        ?>
    </header>

    <main>
        <section class="section container">
            <h4 class="center-align uppercase">Detalhes da Candidatura</h4>

            <b> Dados pessoais</b>

            <?php
            $query = "SELECT * FROM candidatos WHERE matricula='" . $matricula . "'";
            $resultado = conecta_seleciona($query);
            $res = mysqli_fetch_assoc($resultado);
            ?>

            <p>Nome: <span style="color: #737373"> <?php echo($res['nome']); ?></span></p>

            <p>E-mail: <span style="color: #737373"> <?php echo($res['email']); ?> </span></p>

            <p>Matrícula: <span style="color: #737373"> <?php echo($res['matricula']); ?> </span></p>

            <p>CPF: <span style="color: #737373"> <?php echo($res['cpf']); ?> </span></p>

            <p>Registro Geral (RG): <span style="color: #737373"> <?php echo($res['rg']); ?> </span></p>

            <p>Orgão Expedidor: <span style="color: #737373"> <?php echo($res['orgao_expedidor']); ?> </span></p>

            <p>Sexo: <span style="color: #737373"> <?php echo($res['sexo']); ?> </span></p>

            <p>Telefone: <span style="color: #737373"> <?php echo($res['telefone']); ?></span></p>

            <p>Passaporte: <span style="color: #737373"> <?php echo($res['passaporte']); ?> </span></p>

            <p>Data de nascimento: <span style="color: #737373"> <?php echo($res['data_nascimento']); ?> </span></p>

            <p>Curso: <span style="color: #737373"> <?php echo($res['curso']); ?> </span></p>

            <b> Dados Bancários </b> 

            <p>Banco: <span style="color: #737373"> <?php echo($res['banco']); ?></span></p>

            <p>Agência: <span style="color: #737373"> <?php echo($res['agencia']); ?> </span></p>

            <p>Conta: <span style="color: #737373"> <?php echo($res['conta']); ?> </span></p>

            <?php
            $query = "SELECT * FROM candidato_opcao_universidade WHERE matricula='" . $matricula . "' AND edital='" . $edital . "'";
            $resultado = conecta_seleciona($query);

            $i = 1;
            while ($lista = mysqli_fetch_assoc($resultado)) {

                echo ('<b>' . $i . 'ª opção de universidade</b>');

                echo('<p>Nome: <span style="color: #737373"> ' . $lista['nome'] . ' </span></p>');
                echo('<p>Curso: <span style="color: #737373"> ' . $lista['curso'] . ' </span></p>');
                echo('<p>Local: <span style="color: #737373"> ' . $lista['local'] . ' </span></p>');
                $i++;
            }
            ?>

            <hr>
            <br>

            <form style="display: inline;" method="post" action="aeri_acompanhar_processo.php" > 
                <input type="hidden" name="edital" value="<?php echo ($edital) ?>"/>   
                <input type="hidden" name="matricula" value="<?php echo ($matricula) ?>"/>  
                <button class="btn waves-effect waves-light orange darken-4 " type="submit" name="historico"> 
                    Histórico da candidatura </button> 
            </form>

            <br><br>
            <hr>
            <br>
            <b>Arquivos anexados</b> 

            <table class="striped">
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Nome</th>
                        <th>Ações</th>

                    </tr>
                </thead>

                <tbody>
                    <?php
                    $caminho_edital = str_replace('/', '-', $edital);
                    $caminho = 'arquivos/editais/' . $caminho_edital . '/candidatos/' . $matricula . '/arquivos_inscricao/';
                    $diretorio = dir($caminho);
                    while (($arquivo_1 = $diretorio->read()) !== false) {

                        if (strrchr($arquivo_1, '.') == '.pdf') {

                            echo '<tr><td> <img src = "img/icones/pdf.png" width = "30" height = "30" /></td>
                            <td>' . $arquivo_1 . '</td>
                            <td> <a href=' . $caminho . $arquivo_1 . ' download="' . $arquivo_1 . '">' . 'Download' . '</a></td></tr>';
                        }
                    }

                    $diretorio->close();
                    ?>
                </tbody>
            </table>

        </section>

    </main>


    <?php
    include("rodape_aeri.php");
    ?>


    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    <script> $(".button-collapse").sideNav();</script>

</body>
</html>