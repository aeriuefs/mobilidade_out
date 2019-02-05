<?php
require_once('funcoes_uteis.php');

verificar_sessao();

require_once('funcoes_de_arquivos.php');

$edital = isset($_POST['edital']) ? $_POST['edital'] : recurpera_candidato();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
        include("topo_pagina.php");
        ?>
    </head>
    <body>

        <header>
            <?php
            include("navbar_candidato.php");
            ?>
        </header>

        <main>

            <?php
            include("parallax.php");
            ?>

            <section class="section container">

                <h4 class="center-align uppercase">Detalhes do Processo de candidatura - Edital <?php echo $edital ?></h4>

                <b class="orange-text"> Dados pessoais</b>

                <?php
                $query = "SELECT * FROM candidatos WHERE matricula='" . $_SESSION['matricula'] . "'";
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

                <p>Curso: <span style="color: #737373"> <?php formatar_data($res['curso']); ?> </span></p>

                <b class="orange-text"> Dados Bancários </b> 

                <p>Banco: <span style="color: #737373"> <?php echo($res['banco']); ?></span></p>

                <p>Agência: <span style="color: #737373"> <?php echo($res['agencia']); ?> </span></p>

                <p>Conta: <span style="color: #737373"> <?php echo($res['conta']); ?> </span></p>

                <?php
                $query = "SELECT * FROM candidato_opcao_universidade WHERE matricula='" . $_SESSION['matricula'] . "' AND edital='" . $edital . "'";
                $resultado = conecta_seleciona($query);

                $i = 1;
                while ($lista = mysqli_fetch_assoc($resultado)) {

                    echo ('<b class="orange-text">' . $i . 'ª opção de universidade</b>');

                    echo('<p>Nome: <span style="color: #737373"> ' . $lista['nome'] . ' </span></p>');
                    echo('<p>Curso: <span style="color: #737373"> ' . $lista['curso'] . ' </span></p>');
                    echo('<p>Local: <span style="color: #737373"> ' . $lista['local'] . ' </span></p>');
                    $i++;
                }
                ?>

                <br><br>

                <b>Arquivos anexados em sua inscrição</b> 

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
                        $caminho = 'arquivos/editais/' . $caminho_edital . '/candidatos/' . $_SESSION['matricula'] . '/arquivos_inscricao/';
                        $diretorio = dir($caminho);
                        while (($arquivo_1 = $diretorio->read()) !== false) {

                            if (strrchr($arquivo_1, '.') == '.pdf') {

                                echo '<tr><td> <img src = "img/icones/pdf.png" width = "30" height = "30" /></td>
                            <td>' . $arquivo_1 . '</td>
                            <td> <a class="orange-text" href=' . $caminho . $arquivo_1 . ' download="' . $arquivo_1 . '">' . 'Download' . '</a></td></tr>';
                            }
                        }

                        $diretorio->close();
                        ?>
                    </tbody>
                </table>

            </section>

        </main>


        <div class="espacamento"></div>

        <?php
        include("rodape_pagina.php");
        include("scripts.php");
        ?>

    </body>
</html>