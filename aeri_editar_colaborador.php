<?php
session_start();
if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_uteis.php');

$matricula = $_POST['matricula'];

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
            <h4 class="center-align uppercase">Editar cadastro</h4>

            <div class="row">

                <form class="col s12" action="">

                    <b>Informações do colaborador</b>

                    <?php
                    $query = "SELECT * FROM servidores A INNER JOIN perfis_usuario B ON A.tipo = B.codigo WHERE matricula='" . $matricula . "'";
                    $resultado = conecta_seleciona($query);
                    $res = mysqli_fetch_assoc($resultado);
                    ?>

                    <div class="row">

                        <div class="input-field col l6 m6 s12 ">
                            <input  id="nome" type="text" class="validate" name="nome_colaborador" value="<?php echo($res['nome']); ?>">
                            <label for="nome">Nome</label>
                        </div>

                        <div class="input-field col l6 m6 s12">

                            <SELECT NAME = "tipos" SIZE=1>

                                <?php
                                $query = "SELECT * FROM perfis_usuario";
                                $resultado_tipos = conecta_seleciona($query);

                                $inf = '';
                                while ($lista_tipos = mysqli_fetch_assoc($resultado_tipos)) {

                                    if ($res['tipo'] == $lista_tipos['codigo']) {
                                        $inf = ' selected';
                                    }

                                    echo ('<OPTION value = "' . $lista_tipos['codigo'] . '" ' . $inf . ' >' . $lista_tipos['titulo_tipo']);

                                    $inf = '';
                                }
                                ?>

                            </SELECT>
                        </div>

                    </div>

                    <div class="row">

                        <div class="input-field col l6 m6 s12">
                            <input  id="email" type="text" class="validate" name="email" value="<?php echo($res['email']); ?>">
                            <label for="email">E-mail</label>
                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input  id="senha" type="text" class="validate" name="senha" value="<?php echo($res['senha']); ?>">
                            <label for="senha">Senha</label>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col">

                            <button class="btn waves-effect waves-light" type="submit" name="enviar">Salvar informações
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