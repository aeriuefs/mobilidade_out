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

                <h4 class="center-align uppercase">Avalição Recurso</h4> 
                
                <strong>Recurso Apresentado:</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                   dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                   aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 
                   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                   culpa qui officia deserunt mollit anim id est laborum.
                    
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                   dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                   aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 
                   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                   culpa qui officia deserunt mollit anim id est laborum.    
                </p>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea" data-length="120"></textarea>
                        <label for="textarea1">Resposta do avaliador</label>
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