<?php
session_start();
require_once('sessao_aeri.php');
require_once('funcoes_banco_de_dados.php');
require_once('funcoes_uteis.php');

$edital = $_POST['edital'];
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

                    <?php
                    $query = "SELECT * FROM editais WHERE numero_edital='" . $edital . "'";
                    $resultado = conecta_seleciona($query);
                    $res = mysqli_fetch_assoc($resultado);
                    ?>

                    <div class="row">

                        <div class="input-field col l6 m6 s12 ">
                            <input  id="numero_edital" type="text" class="validate" name="numero_edital" value="<?php echo($res['numero_edital']); ?>">
                            <label for="numero_edital">Número do Edital</label>
                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input  id="nome" type="text" class="validate" name="nome" value="<?php echo($res['tipo_intercambio']); ?>">
                            <label for="nome">Nome</label>
                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input  id="vagas" type="text" class="validate" name="vagas" value="<?php echo($res['numero_vagas']); ?>">
                            <label for="vagas">Número do passaporte</label>
                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input type="text" class="datepicker" name="data_inicio" id="data_inicio" value="<?php echo($res['inicio_inscricao']); ?>">
                            <label for="data_inicio">Data de início</label>
                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input type="text" class="datepicker" name="data_encerramento" id="data_encerramento" value="<?php echo($res['fim_inscricao']); ?>">
                            <label for="data_encerramento">Data de encerramento</label>
                        </div>

                    </div>

                    Nota: Ao selecionar um novo arquivo do edital, o arquivo anterior será substituido. 

                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Arquivo</span>
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
</body>
</html>