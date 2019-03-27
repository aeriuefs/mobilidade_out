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
            include("parallax_home.php");
            ?>

            <section class="section container">
                <h4 class="center-align uppercase">Recuperação de senha de acesso</h4>

                <p>Olá. Esta sessão foi criada para que os úsuários cadastrados no sistema possam recuperar sua senha de acesso. Por favor, preencha o formulário abaixo
                    para poder redefinir sua senha./p>

                <form class="col s12" action="candidato_redefinir_senha.php" method="POST">
                    
                    <div class="row">

                        <div class="input-field col s12 m12 l6">
                            <input  id="matricula" name="matricula" type="text" class="validate">
                            <label for="matricula">Matrícula</label>
                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input  id="cpf" type="number" name="cpf" class="validate" required>
                            <label for="cpf">CPF</label>
                        </div>

                    </div>

                    <div class="row">

                        <div class="input-field col l6 m6 s12 ">
                            <input  id="rg" type="number" name="rg" class="validate" required>
                            <label for="rg">Registro geral (RG)</label>
                        </div>

                        <div class="input-field col l6 m6 s12">

                            <input type="date"  class="validate" name="data_nascimento" required >

                        </div>

                    </div>

                    <div class="row">
                        <button class="btn waves-effect waves-light indigo lighten-2" type="submit" name="action">Recuperar
                            <i class="material-icons right">chevron_right</i>
                        </button>
                    </div>

                </form>

            </section>

        </main>


        <?php
        include("rodape_pagina.php");
        include("scripts.php");
        ?>

    </body>
</html>