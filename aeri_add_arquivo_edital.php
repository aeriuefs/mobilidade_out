<?php
require_once('sessao_aeri.php');
require_once('funcoes_banco_de_dados.php');
require_once ('funcoes_de_arquivos.php');

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


            <h4 class="center-align uppercase">Adicionar arquivo Edital</h4> 

            <form class="col s12" action="bd_aeri_add_arquivo_edital.php" method="post" enctype="multipart/form-data">

                <b> Adicionar arquivos ao edital</b>
                
                <input type="hidden" name="edital" value="<?php echo($res['numero_edital']); ?>"/>

                <div class="input-field col l6 m6 s12 ">
                    <input  id="nome_arquivo" type="text" class="validate" name="nome_arquivo">
                    <label for="nome_arquivo">Identificação do arquivo</label>
                </div>

                <div class="file-field input-field">
                    <div class="btn">
                        <span>Arquivo</span>
                        <input type="file" name="arquivo" accept="application/pdf">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>

                <div class="row">

                    <div class="col">

                        <button class="btn waves-effect waves-light" type="submit" name="enviar">Enviar
                            <i class="material-icons right">send</i>
                        </button>

                    </div>

                </div>

            </form>

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
        $(document).ready(function () {

            $('.modal').modal();
        });
    </script>

</body>
</html>