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

            <h4 class="center-align uppercase">Documentos</h4> 

            <p>Abaixo são listados os documentos aceitos pelo sistema. Os candidatos só podem enviar documentos cadastrados previamente.</p>

            <table class="striped">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Ação</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $query = "SELECT * FROM tipos_arquivos ";
                    $resultado = conecta_seleciona($query);

                    while ($res = mysqli_fetch_assoc($resultado)) {

                        echo('<tr><td>' . $res['codigo'] . '</td>');
                        echo('<td>' . $res['titulo'] . '</td>');
                        echo('<td><form style="display: inline;" method="post" action="" > '
                        . '<input type="hidden" name="codigo" value="' . $res['codigo'] . '"/>
                         <button class="btn waves-effect waves-light red " type="submit" name="selecionar"> Excluir </button> </form></td></tr>');
                    }
                    ?>
                </tbody>
            </table>

            <hr>
            
            <br>
            <b>Novo tipo de documento</b>
            

            <form>
                
                <div class="row">

                    <div class="input-field col l6 m12 s12">
                        <input type="text" id="informacao" class="materialize-textarea">
                        <label for="informacao">Nome do documento</label>
                    </div>

                </div>

                <div class="row">
                    <div class="input-field col l12 m12 s12">
                        <button class="btn waves-effect waves-light blue-grey " type="submit" name="salvar">Salvar arquivo

                            <i class="material-icons right">save</i>

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

</body>
</html>