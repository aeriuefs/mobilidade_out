<?php
require_once('sessao_aeri.php');

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

            <section class="section container">
                <h4 class="center-align uppercase">Dispensar candidatos</h4>

                <div class="row">

                    <form class="col s12" action="bd_aeri_proficiencia_dispensa_candidato.php" method="post">

                        <p>Abaixo são listados os candidatos homologados com suas respectivas informações. Nesta sessão você pode dispensar um candidato 
                        de um ou algumas provas de proficiência. Para isto, basta marcar as provas que o candidato não necessita fazer e em seguida salvar 
                        estas informações.</p>
                        <b class="orange-text">Candidatos Homologados</b>

                        <?php
                        $query = "SELECT * FROM candidaturas WHERE edital = '" . $edital . "' AND situacao_atual > 2 AND situacao_atual != 3";
                        $resultado = conecta_seleciona($query);
                        $i = 0;
                        while ($res = mysqli_fetch_assoc($resultado)) {
                            
                            echo ('<p><b>Nome: </b>' . $res['nome'] . ' | <b>Matrícula: </b>' . $res['matricula'] );

                            $query2 = "SELECT * FROM candidato_opcao_universidade WHERE matricula='" . $res['matricula'] . "' AND edital='" . $edital . "'";
                            $resultado2 = conecta_seleciona($query2);

                            $i = 1;
                            while ($lista = mysqli_fetch_assoc($resultado2)) {

                                echo ('<br><b>' . $i . 'ª opção de universidade: </b>');
                                echo('<span style="color: orange"> ' . $lista['nome'] . ' </span>');
                                echo('<b>Local:</b> <span style="color: orange"> ' . $lista['local'] . ' </span>');
                                $i++;
                            }
                            
                            echo ('<br>Dispensar candidatos das provas de: </p>');
                            echo('<input type="checkbox" name="ingles[]" id="' . $i . '" value="' . $res['matricula'] . '" /> <label for="' . $i . '"> Inglês &nbsp&nbsp</label>');
                            $i++;
                            echo('<input type="checkbox" name="espanhol[]" id="' . $i . '" value="' . $res['matricula'] . '" /> <label for="' . $i . '"> Espanhol &nbsp&nbsp</label>');
                            $i++;
                            echo('<input type="checkbox" name="frances[]" id="' . $i . '" value="' . $res['matricula'] . '" /> <label for="' . $i . '"> Francês &nbsp&nbsp</label><hr>');
                            $i++;
                        }
                        ?>



                        <button class="btn waves-effect waves-light blue-grey " type="submit" name="salvar"> Salvar informações</button> 

                    </form>

                </div>


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

            $('.datepicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 100, // Creates a dropdown of 15 years to control year,
                today: 'Hoje',
                clear: 'Limpar',
                close: 'Ok',
                closeOnSelect: false // Close upon selecting a date,
            });

        </script>

        <script>

            $(document).ready(function () {
                $('select').material_select();
            });

        </script>
    </body>
</html>