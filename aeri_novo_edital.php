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
            <h4 class="center-align uppercase">Cadastrar Edital</h4>

            <div class="row">

                <form class="col s12" action="">

                    <b>Informações do edital</b>

                    <div class="row">

                        <div class="input-field col l6 m6 s12 ">
                            <input  id="numero_edital" type="text" class="validate" name="numero_edital">
                            <label for="numero_edital">Número do Edital</label>
                        </div>

                        <div class="input-field col l6 m6 s12">

                            <SELECT NAME = "tipo" SIZE=1>

                                <option value="0" disabled selected>Selecione o tipo de edital</option>
                                <option value="1"> AERI/UEFS </option>
                                <option value="2"> BRACOL </option>
                                <option value="3"> ABREUM </option>

                            </SELECT>

                        </div>

                    </div>

                    <div class="row">

                        <div class="input-field col l6 m6 s12">
                            <input  id="vagas" type="text" class="validate" name="vagas">
                            <label for="vagas">Número de vagas</label>
                        </div>

                    </div>

                    <b> Data de início e fim </b>
                    
                    <div class="row">

                        <div class="input-field col l6 m6 s12">
                            <input type="date" name="data_inicio" id="data_inicio">

                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input type="date"  name="data_encerramento" id="data_encerramento" placeholder="jjjjjj">

                        </div>

                    </div>

                    <b> Arquivos do edital</b>

                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Edital</span>
                            <input type="file" name="arquivo">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
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