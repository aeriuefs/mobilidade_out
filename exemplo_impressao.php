<?php
require_once('funcoes_uteis.php');
?>

<!DOCTYPE html>
<html lang="pt-br" moznomarginboxes mozdisallowselectionprint>
    <head>
    <header>
        <?php
        include("topo_pagina.php");
        ?>
    </header>
</head>
<body>


    <main>

        <section class="section container">

            <img src="img/Capturar.PNG" alt="bg-intro"/>

            
            <h4 class="center-align uppercase">Documentos</h4> 

            <p>Abaixo são listados os tipos de eventos que podem ocorrer na candidatura de um estudante. Obs: A propriedade "Visível" indica se o evento é visível ao estudante ou de uso interno.</p>

            <table class="striped">
                <thead>
                    <tr>
                        <th>Nº</th>
                        <th>Nome</th>
                        <th>Cabe recurso</th>
                        <th>Visível</th>
                        
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $query = "SELECT * FROM status_inscricao ";
                    $resultado = conecta_seleciona($query);

                    while ($res = mysqli_fetch_assoc($resultado)) {

                        echo('<tr><td>' . $res['id'] . '</td>');
                        echo('<td>' . $res['titulo'] . '</td>');
                        echo('<td>' . $res['cabe_recurso'] . '</td>');
                        echo('<td>' . $res['visivel'] . '</td></tr>');
                        
                    }
                    ?>
                </tbody>
            </table>

            

        </section>

    </main>

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    <script> $(".button-collapse").sideNav();</script>

</body>
</html>