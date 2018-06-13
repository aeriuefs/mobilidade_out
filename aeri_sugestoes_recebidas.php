
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

                <h4 class="center-align uppercase">Sugestões Recebidas</h4> 

<table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Tipo</th>
                            <th>Ação</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Maria Alice</td>
                            <td>Estudante</td>
                            <td><a class="waves-effect waves-light btn modal-trigger" href="aeri_barema.php">Visualizar</a></td>
                        </tr>
                        <tr>
                            <td>Alan Silva</td>
                            <td>Estudante</td>
                            <td><a class="waves-effect waves-light btn modal-trigger" href="">Visualizar</a></td>
                        </tr>
                        <tr>
                            <td>Jonathan Silva</td>
                            <td>Estudante</td>
                            <td><a class="waves-effect waves-light btn modal-trigger" href="">Visualizar</a></td>
                        </tr>
                    </tbody>
                </table>

                <a class="waves-effect waves-light btn modal-trigger" href="">Salvar</a>

            </section>

        </main>

        <?php
        include("rodape_aeri.php");
        include("scripts.php");
        ?>

    </body>

</html>