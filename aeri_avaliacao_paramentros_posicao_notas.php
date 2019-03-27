<?php
require_once('sessao_aeri.php');
require_once('funcoes_banco_de_dados.php');
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
            include("navbar_aeri.php");
            ?>
        </header>

        <main>

            <?php
            include("parallax.php");
            ?>

            <section class="section container">

                <h4 class="center-align uppercase">Atribuição de notas e posições</h4> 

                Nesta sessão você pode adicionar as notas e posições dos alunos no curso escolhido. 
                Lembre-se que, após adicionar as informações de um aluno, clique em salvar. 
                
                <br><br>
                <b>INFORMAÇÕES DO CURSO:</b>
                
                <?php
                $query_candidaturas = "SELECT * FROM candidaturas WHERE edital = '" . $edital . "'";
                $resultado = conecta_seleciona($query_candidaturas);

                echo ('<div class="row"><div class="input-field col s6 l6 m6">');
                echo ('<input name="numero" type="text" id="nota" /> <label for="nota"> Número de alunos no curso </label></div></div>');

                
                echo '<b> INFORMAÇÕES DOS ESTUDANTES:</b>';

                while ($res = mysqli_fetch_assoc($resultado)) {

                    echo ('<form style="display: inline;" method="post" action=""> <div class="row">');
                    echo ('<div class="input-field col s12 l12 m12">');
                    echo ('<p>Nome: ' . $res['nome'] . ' | Matrícula: ' . $res['matricula'] . ' | Curso: ' . 'Engenharia Civil' . '</p>');

                    $query_universidades = "SELECT * FROM candidato_opcao_universidade WHERE edital = '" . $edital . "' AND matricula = '" . $res['matricula'] . "'";
                    $resultado2 = conecta_seleciona($query_universidades);

                    echo ('<div class="input-field col s6">');
                    echo ('<input name="nota" type="text" id="nota" /> <label for="nota"> Nota </label></div>');
                    echo ('<div class="input-field col s6">');
                    echo ('<input name="posicao" type="text" id="posicao" /> <label for="posicao"> Posição </label></div>');

                    echo ('<input type="hidden" name="matricula" value="' . $res['matricula'] . '"/>');
                    echo ('<input type="hidden" name="edital" value="' . $res['edital'] . '"/>');
                    echo ('<button class="btn waves-effect waves-light" type="submit" name="salvar"> Salvar <i class="material-icons right"> save </i> </button>');
                    echo ('</div></div></form>');
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