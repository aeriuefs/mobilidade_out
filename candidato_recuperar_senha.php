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
            include("navbar_login.php");
            ?>
        </header>

        <main>

            <?php
            include("parallax.php");
            ?>

            <section class="section container">
                <h4 class="center-align uppercase">Recuperação de senha de acesso</h4>

                <p>Olá. Esta sessão foi criada para que os úsuários cadastrados no sistema possam recuperar sua senha de acesso. Por favor, preencha o formulário abaixo
                    e em breve enviaremos sua senha por e-mail. </p>

                <div class="row">
                    <div class="row ">
                        <div class="input-field col s12 m12 l6">
                            <i class="material-icons prefix">school</i>
                            <input  id="iMatricula" name="nMatricula" type="text" class="validate">
                            <label for="iMatricula">Matrícula</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <button class="btn waves-effect waves-light blue-grey " type="submit" name="action">Recuperar
                        <i class="material-icons right">chevron_right</i>
                    </button>
                </div>

            </section>

        </main>


        <?php
        include("rodape_pagina.php");
        include("scripts.php");
        ?>

    </body>
</html>