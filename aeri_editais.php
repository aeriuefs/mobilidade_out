<?php
session_start();
if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_uteis.php');

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

        <?php
        include("parallax.php");
        ?>

        <section class="section container">


            <h4 class="center-align uppercase">Editais</h4> 

            <b>Novo edital</b>
            <br><br>
            <form style="display: inline;" method="post" action="aeri_novo_edital.php" >                
                <button class="btn waves-effect waves-light blue-grey " type="submit" name="novo_edital"> Cadastrar</button> 
            </form>

            <br><br>

            <hr>
            <b>Todos os editais</b>
            <br><br>

            <table class="striped">
                <thead>
                    <tr>
                        <th>Número</th>
                        <th>Tipo</th>
                        <th>Download</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    
                    <?php
                    $query = "SELECT * FROM editais";
                    $resultado = conecta_seleciona($query);

                    while ($res = mysqli_fetch_assoc($resultado)) {
                        echo('<tr><td>' . $res['numero_edital'] . '</td>');
                        echo('<td>' . $res['tipo_intercambio'] . '</td>');
                        echo('<td><img src="img/icones/pdf.png"  width="30" height="30" /></td>');
                        echo('<td><form style="display: inline;" method="post" action="aeri_detalhes_edital.php" > <input type="hidden" name="edital" value="' . $res['numero_edital'] . '"/>
                         <button class="btn waves-effect waves-light blue-grey " type="submit" name="detalhes"> Detalhes </button> </form></td></tr>');
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