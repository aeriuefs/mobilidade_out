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
            include("navbar_candidato.php");
            ?>
        </header>

        <!--Main-->
        <main>

            <?php
            include("parallax.php");
            ?>

            <section class="section container">

                <h4 class="center-align uppercase">Cadastro de Candidato</h4>

                <form class="col s12" action="bd_candidato_cadastro.php" method="POST">

                    <b>Dados Pessoais</b>

                    <div class="row">

                        <div class="input-field col l6 m6 s12">
                            <input  id="nome" type="text" name="nome" class="validate" required pattern="[a-zA-Z\s]+">
                            <label for="nome">Nome Completo</label>
                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input id="email" type="email" name="email" class="validate" required>
                            <label for="email">E-mail</label>
                        </div>

                    </div>

                    <div class="row">

                        <div class="input-field col l6 m6 s12">
                            <input  id="matricula" type="number" name="matricula" class="validate" required>
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
                            <input  id="orgao_expedidor" type="text" name="orgao_expedidor" class="validate" required>
                            <label for="orgao_expedidor">Orgão expedidor</label>
                        </div>

                    </div>

                    <div class="row">

                        <p>
                            <input name="sexo" type="radio" id="feminino" value="F" checked />
                            <label for="feminino">Sou do sexo feminino.</label>
                        </p>

                        <p>
                            <input name="sexo" type="radio" id="masculino" value="M"/>
                            <label for="masculino">Sou do sexo masculino.</label>
                        </p>

                    </div>

                    <label>Data de nascimento</label>
                    <div class="row">

                        <div class="input-field col l6 m6 s12">

                            <input type="date"  class="validate" name="data_nascimento" >

                        </div>

                    </div>

                    <div class="row">

                        <div class="input-field col l6 m6 s12">
                            <input id="senha" type="password" name="senha" class="validate" required>
                            <label for="senha">Senha</label>
                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input id="confirmacao_senha" type="password" name="confirmacao_senha" class="validate" required>
                            <label for="confirmacao_senha">Confirmar senha</label>
                        </div>

                    </div>

                    <div class="row">

                        <button class="btn waves-effect waves-light blue-grey " type="submit" name="entrar">Enviar dados

                            <i class="material-icons right">chevron_right</i>

                        </button>

                    </div>

                </form>

            </section>

        </main>

        <?php
        include("rodape_pagina.php");
        ?>

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>

        <script> $(".button-collapse").sideNav();</script>


    </body>
</html>