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

            <p>Abaixo são listados os tipos de eventos que podem ocorrer na candidatura de um estudante. Obs: A propriedade "Visível" indica se o evento é visível ao estudante ou de uso interno.</p>

            <table class="striped">
                <thead>
                    <tr>
                        <th>Nº</th>
                        <th>Nome</th>
                        <th>Cabe recurso</th>
                        <th>Visível</th>
                        <th>Ação</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $query = "SELECT * FROM status_inscricao ";
                    $resultado = conecta_seleciona($query);

                    while ($res = mysqli_fetch_assoc($resultado)) {

                        echo('<tr><td>' . $res['id'] . '</td>');
                        echo('<td>' . $res['titulo'] . '</td>');
                        echo('<td>' . $res['cabe_recurso'] . '</td>');
                        echo('<td>' . $res['visivel'] . '</td>');
                        echo('<td><form style="display: inline;" method="post" action="" > '
                        . '<input type="hidden" name="codigo" value="' . $res['id'] . '"/>
                         <button class="btn waves-effect waves-light red " type="submit" name="selecionar"> Excluir </button> </form></td></tr>');
                    }
                    ?>
                </tbody>
            </table>

            <br>
            <hr>

            <br>
            <b>Novo tipo de evento</b>


            <form>

                <div class="row">

                    <div class="input-field col l6 m12 s12">
                        <input type="text" id="informacao" class="materialize-textarea">
                        <label for="informacao">Nome do evento</label>
                    </div>

                </div>
                <b>Opções</b>
                <div class="row">

                    <p>
                        <input name="visivel" type="radio" id="feminino" value="S" checked />
                        <label for="feminino">Evento visível</label>
                    </p>

                    <p>
                        <input name="visivel" type="radio" id="masculino" value="N"/>
                        <label for="masculino">Evento não visível</label>
                    </p>

                </div>
—
                <div class="row">

                    <p>
                        <input name="recurso" type="radio" id="feminino1" value="S" checked />
                        <label for="feminino1">Cabe recurso</label>
                    </p>

                    <p>
                        <input name="recurso" type="radio" id="masculino1" value="N"/>
                        <label for="masculino1">Não cabe recurso</label>
                    </p>

                </div>

                <div class="row">
                    <div class="input-field col l12 m12 s12">
                        <button class="btn waves-effect waves-light blue-grey " type="submit" name="salvar">Salvar evento

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