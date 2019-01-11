<?php

session_start();

if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    
} else {
    
    if ($_SESSION['tipo'] == '1' || $_SESSION['tipo'] == '2') {

        header('location:aeri_home.php');
    } elseif ($_SESSION['tipo'] == '3') {

        header('location:comissao_home.php');
    } elseif ($_SESSION['tipo'] == '4') {

        header('location:colegiado_home.php');
    } elseif ($_SESSION['tipo'] == '0') {

        header('location:candidato_home.php');
    }
}

?>

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

                    <form class="col s12 m8 l6" action="bd_login_candidato.php" method="post">
                        
                        <h4 class="center-align uppercase">Entrar</h4>
                        
                        <div class="row ">
                            <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">account_circle</i>
                                <input  id="matricula" name="matricula" type="text" class="validate">
                                <label for="matricula">Matrícula</label>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="input-field col s12 m12 l12 ">
                                <i class="material-icons prefix">lock</i>
                                <input id="senha" name="senha" type="password" class="validate">
                                <label for="senha">Senha</label>
                            </div>
                        </div>

                        <div class="row">
                            <button class="btn waves-effect waves-light red lighten-2" type="submit" name="entrar">Entrar
                                <i class="material-icons right">chevron_right</i>
                            </button>
                        </div>

                        <div class="row">
                            <a href="candidato_recuperar_senha.php" class="grey-text">Esqueci minha senha :(</a>
                        </div>

                    </form>

                    <div class="col s12 m12 l6">

                        <div class="col s12">
                            <div class="card">
                                <div class="card-image">
                                    <img src="img/cadastro.jpg">
                                    <span class="card-title">Cadastro</span>
                                    <a class="btn-floating halfway-fab waves-effect waves-light red lighten-2" href="candidato_cadastro.php"><i class="material-icons">add</i></a>
                                </div>
                                <div class="card-content">
                                    <p>Se você é aluno da instituição, possui uma matrícula ativa e tem intenção de fazer a inscrição em um processo de intercâmbio, clique no botão "+" para se cadastar.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </section>

        </main>

        <?php
        include("rodape_pagina.php");
        include("scripts.php");
        
        ?>

    </body>
</html>