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

    <?php
    include("topo_pagina.php");
    ?>

    <body>

        <header>
            <?php
            include("navbar_candidato.php");
            ?>
        </header>

        <main>

            <?php
            include("parallax.php");
            ?>

            <section class="section container">

                <h4 class="center-align uppercase">Atualizar dados</h4>

                <div class="row">
                    <div class="col s12 m4 uppercase center-align">
                        <div class="card blue-grey">
                            <div class="card-image">
                                <img src="img/dados_pessoais.jpg">
                                <span class="card-title"><strong>Cadastro</strong></span>
                            </div>

                            <div class="card-action hoverable">

                                <a href="candidato_atualizar_dados_pessoais.php" class="white-text">Dados Pessoais</a>

                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4 uppercase center-align">
                        <div class="card blue-grey">
                            <div class="card-image">
                                <img src="img/dados_bancarios.jpg">
                                <span class="card-title"><strong>Financeiro</strong></span>
                            </div>

                            <div class="card-action hoverable">

                                <?php
                                $query = "SELECT * FROM candidato_dados_bancarios WHERE matricula='" . $_SESSION['matricula'] . "'";

                                $result = conecta_seleciona($query);

                                if (mysqli_num_rows($result) > 0) {

                                    echo '<a href="candidato_atualizar_dados_bancarios.php" class="white-text">Dados Bancários</a>';
                                } else {

                                    echo '<a href="candidato_adicionar_dados_bancarios.php" class="white-text">Dados Bancários</a>';
                                }
                                ?>

                            </div>

                        </div>

                    </div>

                    <div class="col s12 m4 uppercase center-align">
                        <div class="card blue-grey">
                            <div class="card-image">
                                <img src="img/dados_senha.jpeg">
                                <span class="card-title"><strong>Segurança</strong></span>
                            </div>

                            <div class="card-action hoverable">
                                <a href="candidato_atualizar_dados_seguranca.php" class="white-text">Alterar Senha</a>
                            </div>
                        </div>
                    </div>

                </div>



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