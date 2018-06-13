<?php
session_start();

if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_uteis.php');

$edital = $_POST['edital'];
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

                <h4 class="center-align uppercase">Detalhes do Processo de candidatura</h4>

                <b> Dados pessoais</b>

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

                <p>Curso: <span style="color: #737373"> <?php echo($res['curso']); ?> </span></p>

                <b> Dados Bancários </b> 

                <?php
                $query = "SELECT * FROM candidato_dados_bancarios WHERE matricula='" . $_SESSION['matricula'] . "'";
                $resultado = conecta_seleciona($query);
                $res = mysqli_fetch_assoc($resultado);
                ?>

                <p>Banco: <span style="color: #737373"> <?php echo($res['banco']); ?></span></p>

                <p>Agência: <span style="color: #737373"> <?php echo($res['agencia']); ?> </span></p>

                <p>Conta: <span style="color: #737373"> <?php echo($res['conta']); ?> </span></p>

                <?php
                $query = "SELECT * FROM candidato_opcao_universidade WHERE matricula='" . $_SESSION['matricula'] . "' AND edital='" . $edital . "'";
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
                        <tr>
                            <td> <img src="img/icones/pdf.png"  width="30" height="30" /></td>
                            <td>Arquivo teste</td>
                            <td>
                                <form style="display: inline;" method="post" action="candidato_inscricao_historico.php" > <input type="hidden" name="edital" value=""/>
                                    <input type="hidden" name="matricula" value=""/> <button class="btn waves-effect waves-light blue-grey " type="submit" name="acompanhar"> Download</button> </form>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </section>

        </main>


        <div class="espacamento"></div>

        <?php
        include("rodape_pagina.php");
        ?>


        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>

        <script> $(".button-collapse").sideNav();</script>
    </body>
</html>