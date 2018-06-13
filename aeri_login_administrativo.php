<!DOCTYPE html>
<html lang="pt-br">

    <?php
    include("topo_pagina.php");
    ?>

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

                <div class="row">

                    <form class="col s12 m8 l6" action="bd_login_adm.php" method="post">
                        <h4 class="center-align uppercase">Login administrativo</h4>
                        <div class="row ">
                            <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">account_circle</i>
                                <input  id="iMatricula" name="matricula" type="text" class="validate">
                                <label for="iMatricula">Matrícula</label>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="input-field col s12 m12 l12 ">
                                <i class="material-icons prefix">lock</i>
                                <input id="iSenha" name="senha" type="password" class="validate">
                                <label for="iSenha">Senha</label>
                            </div>
                        </div>

                        <div class="row">
                            <button class="btn waves-effect waves-light blue-grey " type="submit" name="action">Entrar
                                <i class="material-icons right">chevron_right</i>
                            </button>
                        </div>

                        <div class="row">
                            <a href="candidato_recuperar_senha.php">Esqueci minha senha</a>
                        </div>

                    </form>

                    <div class="col s12 m12 l6">

                        <div class="card">
                            <div class="card-image">
                                <img src="img/trabalhadores.jpg">

                            </div>
                            <div class="card-content">
                                <p>O login administrativo é direcionado a servidores da AERI e outros cooperadores. Se você é um estudante,
                                    volte para o início e efetue login/cadastro no sistema clicando no link apropriado abaixo. Se você é um servidor com problemas de acesso entre em contato conosco clicando no link apropriado abaixo.</p>
                            </div>
                            <div class="card-action">
                                <a href="index.php">Sou estudante</a>
                                <a href="http://aeri.uefs.br/contato.php#conteudo">Sou servidor com problemas</a>
                            </div>
                        </div>

                    </div>

                </div>

            </section>

        </main>

        <?php
        include("rodape_pagina.php");
        ?>

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>

        <script> $(".button-collapse").sideNav();</script>

        <script>   $(document).ready(function () {
                $('select').material_select();
            });
        </script>
    </body>
</html>