<?php
session_start();
if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_uteis.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <header>
        <?php
        include("topo_pagina.php");
        ?>
    </header>
</head>
<body>

    <header>
        <?php
        include("navbar_aeri.php");
        ?>
    </header>

    <main>

        <?php
        include("parallax.php");
        ?>

        <section class="section container">

            <h4 class="center-align uppercase">E-mail do sistema</h4>

            <p>Abaixo você pode alterar as informações do e-mail do sistema. Este e-mail é utilizado para enviar mensagens aos usuários como recuperação de senhas e solicitações de cartas de recomendação.</p>
            <div class="row">

                <div class="input-field col l6 m6 s12 ">
                    <input  id="nome" type="text" class="validate" name="nome_colaborador" >
                    <label for="nome">E-mail</label>
                </div>

                <div class="input-field col l6 m6 s12 ">
                    <input  id="nome" type="text" class="validate" name="nome_colaborador" >
                    <label for="nome">Senha</label>
                </div>

            </div>
            
            <button class="btn waves-effect waves-light blue-grey " type="submit" name="novo_edital">Alterar informações</button> 

        </section>

    </main>


    <?php
    include("rodape_aeri.php");
    ?>


    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    <script> $(".button-collapse").sideNav();</script>

</body>
</html>