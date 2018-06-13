
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

                <h4 class="center-align uppercase">Enviar Sugestões</h4> 

                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea" data-length="120"></textarea>
                        <label for="textarea1">Escreva sua sugestão</label>
                    </div>
                </div>

                <a class="waves-effect waves-light btn modal-trigger" href="">Salvar</a>

            </section>

        </main>

        <?php
        include("rodape_aeri.php");
        include("scripts.php");
        ?>

    </body>

</html>