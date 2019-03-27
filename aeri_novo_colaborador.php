<?php
session_start();
if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_banco_de_dados.php');
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
            <h4 class="center-align uppercase">Cadastrar colaborador</h4>

            <div class="row">

                <form class="col s12" action="bd_aeri_novo_colaborador.php" method="post">

                    <b>Informações do novo colaborador</b>

                    <div class="row">

                        <div class="input-field col l6 m6 s12 ">
                            <input  id="nome" type="text" class="validate" name="nome_colaborador">
                            <label for="nome">Nome</label>
                        </div>

                        <div class="input-field col l6 m6 s12">

                            <input  id="matricula" type="text" class="validate" name="matricula">
                            <label for="matricula">Matrícula</label>

                        </div>

                    </div>

                    <div class="row">

                        <div class="input-field col l6 m6 s12">
                            <input  id="email" type="text" class="validate" name="email">
                            <label for="email">E-mail</label>
                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input  id="senha" type="text" class="validate" name="senha">
                            <label for="senha">Senha</label>
                        </div>

                    </div>

                    <div class="row">

                        <div class="input-field col l6 m6 s12">

                            <SELECT NAME = "tipos" SIZE=1>
                                <option value="" disabled selected>Selecione o tipo</option>
                                <?php
                                $query = "SELECT * FROM perfis_usuario";
                                $resultado_tipos = conecta_seleciona($query);

                                while ($lista_tipos = mysqli_fetch_assoc($resultado_tipos)) {


                                    echo ('<OPTION value = "' . $lista_tipos['codigo'] . '" >' . $lista_tipos['titulo_tipo']);
                                }
                                ?>

                            </SELECT>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col">

                            <button class="btn waves-effect waves-light" type="submit" name="enviar">Cadastrar
                                <i class="material-icons right">send</i>
                            </button>

                        </div>

                    </div>

                </form>


            </div>


        </section>

    </main>


    <?php
    include("rodape_aeri.php");
    ?>


    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    <script> $(".button-collapse").sideNav();</script>

    <script>

        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 100, // Creates a dropdown of 15 years to control year,
            today: 'Hoje',
            clear: 'Limpar',
            close: 'Ok',
            closeOnSelect: false // Close upon selecting a date,
        });

    </script>

    <script>

        $(document).ready(function () {
            $('select').material_select();
        });

    </script>
</body>
</html>