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

                <h4 class="center-align uppercase">Estudantes para avaliação</h4> 

                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Edital</th>
                            <th>Ação</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Júlio César Andrade Silva/td>
                            <td>07/2018</td>
                            <td><a class="waves-effect waves-light btn modal-trigger" href="aeri_barema.php">Avaliação</a></td>
                        </tr>
                        <tr>
                            <td>Alan Silva</td>
                            <td>2018/01</td>
                            <td><a class="waves-effect waves-light btn modal-trigger" href="">Avaliação</a></td>
                        </tr>
                        <tr>
                            <td>Jonathan Silva</td>
                            <td>2018/01</td>
                            <td><a class="waves-effect waves-light btn modal-trigger" href="">Avaliação</a></td>
                        </tr>
                    </tbody>
                </table>

                

            </section>

        </main>

        <?php
        include("rodape_aeri.php");
        include("scripts.php");
        ?>

    </body>

</html>