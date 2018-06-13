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

            <?php
            include("parallax.php");
            ?>

            <section class="section container">

                <h4 class="center-align uppercase">Candidatos do edital <?php echo($edital) ?> </h4> 


                <b>Todos os candidatos</b>

                <br><br>

                <form style="display: inline;" method="post" action="aeri_avaliacao_todos.php" >      
                    <input type="hidden" name="edital" value="<?php echo($edital) ?>"/>
                    <button class="btn waves-effect waves-light blue-grey " type="submit" name="visualizar"> Visualizar</button> 
                </form>

                <br><br>

                <hr>

                <b>Candidatos por status da candidatura</b>

                <table class="striped">
                    <thead>
                        <tr>
                            <th>Nº</th>
                            <th>Status</th>
                            <th>Ação</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $query = "SELECT * FROM status_inscricao ";
                        $resultado = conecta_seleciona($query);

                        $i = 1;
                        while ($res = mysqli_fetch_assoc($resultado)) {

                            echo('<tr><td>' . $i . '</td>');
                            echo('<td>' . $res['titulo'] . '</td>');
                            echo('<td><form style="display: inline;" method="post" action="aeri_avaliacao_por_status.php" > '
                            . '<input type="hidden" name="edital" value="' . $edital . '"/>'
                            . '<input type="hidden" name="status" value="' . $res['id'] . '"/>
                         <button class="btn waves-effect waves-light blue-grey " type="submit" name="visualizar"> Visualizar </button> 
                         </form></td></tr>');

                            $i++;
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

    </body>
</html>