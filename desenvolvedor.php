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

                    <p>Nesta página são listas as pessoas que contribuiram direta ou indiretamente com o desenvolvimento do sistema
                        Mobilidade Out. Todos os direitos de utilização estão sobre o domínio da Assessoria Especial de Relações Institucinais 
                        da Universidade Estadual de Feira de Santana - Avenida Transnordestina, s/n - Novo Horizonte, CEP 44036-900 - Feira de Santana - Bahia - Brasil.
                    </p>

                    <b class="uppercase red-text">Desenvolvedor</b>

                    <p>Nome: Júlio César Andrade Silva </p>
                    <p>E-mail: juliocesar.andradee@gmail.com</p>

                    <b class="uppercase red-text">Idealizadora</b>
                    <p>Eneida Soanne Matos Campos de Oliveira</p>

                    <b class="uppercase red-text">Apoio</b>
                    <p>Assessoria Especial de Informática (AEI) - UEFS</p>
                    <p>Felipe Souza Cordeiro</p>

                    <b class="uppercase red-text">Colaboradores</b>
                    <p>Karla Maria Lima Figueiredo Bené Barbosa</p>

                    <p>Rafaela de Oliveira Silva</p>

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