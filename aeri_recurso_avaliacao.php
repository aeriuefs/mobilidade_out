<?php
session_start();

if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_banco_de_dados.php');
require_once('funcoes_uteis.php');

$id = $_POST['id'];

$query = "SELECT * FROM candidato_recursos WHERE id='" . $id . "'";
$resultado = conecta_seleciona($query);
$res = mysqli_fetch_assoc($resultado);

$edital = $res['edital'];
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
            include("navbar_aeri_1.php");
            ?>
        </header>

        <main>

            <?php
            include("parallax.php");
            ?>

            <section class="section container">

                <h4 class="center-align uppercase">Avalição Recurso</h4> 

                <b class="orange-text"> Dados do recurso:</b>

                <p>Matrícula do estudante: <span style="color: #737373"> <?php echo($res['matricula']); ?></span></p>

                <p>Edital: <span style="color: #737373"> <?php echo($res['edital']); ?></span></p>

                <p>Data: <span style="color: #737373"> <?php echo($res['data']); ?> </span></p>

                <strong>Recurso Apresentado:</strong>

                <p><?php echo($res['explanacao']); ?>   </p>


                <b class="orange-text"> Avaliar como AERI:</b>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="resposta_avaliador" name="resposta_avaliador" class="materialize-textarea" data-length="120"></textarea>
                        <label for="resposta_avaliador">Resposta da AERI</label>
                    </div>

                </div>

                <a class="waves-effect waves-light btn modal-trigger" href="">Salvar</a>

                <br><br>
                <b class="orange-text"> Designar para um membro da comissão avaliar:</b>

                <?php
                $query_candidaturas = "SELECT * FROM candidaturas WHERE edital = '" . $edital . "'";
                $resultado = conecta_seleciona($query_candidaturas);

                while ($res = mysqli_fetch_assoc($resultado)) {

                    echo ('<form style="display: inline;" method="post" action="" enctype="multipart/form-data">');

                    $query_comissao = "SELECT * FROM servidores WHERE tipo = '3'";
                    $resultado2 = conecta_seleciona($query_comissao);

                    echo ('<SELECT NAME = "avaliadores" SIZE=1 required="">');
                    echo ('<option value="" disabled selected>Selecione o avaliador</option>');
                    while ($comissao = mysqli_fetch_assoc($resultado2)) {

                        echo ('<OPTION value = "' . $comissao['nome'] . '">' . $comissao['nome']);
                    }

                    echo ('</SELECT>');

                    echo ('<input type="hidden" name="matricula" value="' . $res['matricula'] . '"/>');
                    echo ('<input type="hidden" name="edital" value="' . $res['edital'] . '"/>');
                    echo ('<button class="btn waves-effect waves-light" type="submit" name="salvar"> Designar </button>');
                    echo ('</form>');
                }
                ?>

            </section>

        </main>

        <?php
        include("rodape_aeri.php");
        include("scripts.php");
        ?>

    </body>

</html>