<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Mobilidade out - Dev</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
              rel="stylesheet">

        <link type="text/css" rel="stylesheet"
              href="css/materialize.min.css"
              media="screen,projection"/>

        <link type="text/css" rel="stylesheet" href="css/estilo.css">


        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>

        <header>
            <?php
            include("navbar_login.php");
            ?>
        </header>

        <!--Main-->
        <main>

            <?php
            include("parallax_dev.php");
            ?>

            <section class="section container">
                <h4 class="center-align uppercase">Desenvolvimento</h4>

                <div class="row">

                    <b class="uppercase red-text">Informações do desenvolvedor</b>

                    <p>Nome: Júlio César Andrade Silva </p>
                    <p>E-mail: juliocesar.andradee@gmail.com</p>

                    <b class="uppercase red-text">Apoio</b>
                    <p>Assessoria Especial de Informática (AEI) - UEFS</p>

                    <b class="uppercase red-text">Colaboradores</b>

                    <p></p>

                    <p></p>




                </div>

            </section>

        </main>

        <div class="espacamento"></div>

        <?php
        include("rodape_pagina.php");
        include("scripts.php");
        ?>

    </body>
</html>