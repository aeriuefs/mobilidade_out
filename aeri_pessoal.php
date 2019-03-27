<?php
session_start();
if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_banco_de_dados.php');
require_once('funcoes_uteis.php');

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
                <h4 class="center-align uppercase">Pessoal</h4>

                <b>Novo colaborador</b>
                <br><br>
                <form style="display: inline;" method="post" action="aeri_novo_colaborador.php" >                
                    <button class="btn waves-effect waves-light blue-grey " type="submit" name="novo_colaborador"> Cadastrar</button> 
                </form>

                <br><br><hr>

                <p>Abaixo são listados todos os servidores colaboradores cadastrados no sistema com suas respectivas funções.</p>
                <table class="striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Matrícula</th>
                            <th>Tipo</th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $i = 1;
                        $query = "SELECT * FROM servidores A INNER JOIN perfis_usuario B ON A.tipo = B.codigo";
                        $resultado = conecta_seleciona($query);

                        while ($res = mysqli_fetch_assoc($resultado)) {

                            echo('<tr><td>' . $res['nome'] . '</td>');
                            echo('<td>' . $res['matricula'] . '</td>');
                            echo('<td>' . $res['titulo_tipo'] . '</td>');
                            echo('<td><form style="display: inline;" method="post" action="aeri_pessoal_detalhes.php" > <input type="hidden" name="matricula" value="' . $res['matricula'] . '"/>                            
                         <button class="btn waves-effect waves-light blue-grey " type="submit" name="detalhes"> Destalhes </button> </form></td></tr>');

                            $i++;
                        }
                        ?>

                    </tbody>

                </table>


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
    </body>
</html>