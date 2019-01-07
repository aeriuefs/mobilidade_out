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

            <h4 class="center-align uppercase"> Dados dos cursos </h4>

            <p>Para adicionar informações sobre número de candidatos em um determinado curso, primeiro selecione o curso
                e em seguida específique o número de candidatos. Salve a informação no após preenchimento.</p>

            <b class="orange-text">Adicionar número de candidatos ao curso</b>

            <form class="col s12" action="bd_aeri_comissao_notas_cursos" method="POST">

                <div class="row">

                    <div class="input-field col l6 m6 s12">

                        <SELECT NAME="curso" SIZE=1>

                            <?php
                            $query = "SELECT * FROM cursos";
                            $resultado_cursos = conecta_seleciona($query);

                            if ($res['curso'] == '') {
                                echo '<option value="" disabled selected>Selecione o curso</option>';
                            }

                            while ($lista_cursos = mysqli_fetch_assoc($resultado_cursos)) {

                                echo ('<OPTION value = "' . $lista_cursos['nome'] . '">' . $lista_cursos['nome']);
                            }
                            ?>

                        </SELECT>
                    </div>

                    <div class="input-field col l6 m6 s12">
                        <input  id="numero_alunos" type="text" name="numero_alunos" class="validate">
                        <label for="numero_alunos">Número de alunos</label>
                    </div>

                </div>

                <div class="row">

                    <div class="input-field col l6 m6 s12">
                        <button class="btn waves-effect waves-light blue-grey " type="submit" name="Cadastrar">Salvar
                        </button>
                    </div>

                </div>

            </form>


            <p>Abaixo estão listados todos os cursos cadastrados neste edital com seus respectivos números de
                estudantes.</p>

            <b class="orange-text">Dados de cursos cadastrados</b>

            <table class="striped">
                <thead>
                    <tr>
                        <th>Curso</th>
                        <th>Número de estudantes</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $query = "SELECT * FROM dados_cursos_edital WHERE edital='" . $edital . "'";
                    $resultado = conecta_seleciona($query);

                    while ($res = mysqli_fetch_assoc($resultado)) {

                        echo('<tr><td>' . $res['nome'] . '</td>');
                        echo('<td>' . $res['numero_estudantes'] . '</td>');
                        echo('<td><form style="display: inline;" method="post" action="" > 
                        
                         <button class="btn waves-effect waves-light blue-grey " type="submit" name="alterar"> Alterar</button> </form>
                            <form style="display: inline;" method="post" action="" > '
                        . '<input type="hidden" name="edital" value="' . $res['edital'] . '"/>
                        
                         <button class="btn waves-effect waves-light red " type="submit" name="excluir"> Excluir </button> </form>                         
                            </td></tr>');
                    }
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

    <script>

        $(document).ready(function () {
            $('select').material_select();
        });

    </script>

</body>

</html>