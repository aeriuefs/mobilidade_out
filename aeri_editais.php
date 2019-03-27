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

        <section class="section container">


            <h4 class="center-align uppercase">Editais</h4> 

            <p>Nesta página você pode cadastrar novos editais na sessão "Novo Edital", além de ter acesso a editais já cadastrados previamente na sessão "Todos os editais". </p>

            <b class="orange-text">Novo edital</b>

            <div class="row">

                <div class="col s12 m4 uppercase center-align">
                    <div class="card blue-grey">
                        <div class="card-image">
                            <img src="img/aeri_uefs.jpg">
                            <span class="card-title"><strong>AERI/UEFS</strong></span>
                        </div>

                        <div class="card-action hoverable">
                            <a href="aeri_novo_edital_uefs.php" class="white-text">Cadastrar</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4 uppercase center-align">
                    <div class="card blue-grey">
                        <div class="card-image">
                            <img src="img/abruem.jpg">
                            <span class="card-title"><strong>Abruem</strong></span>
                        </div>

                        <div class="card-action hoverable">
                            <a href="" class="white-text">Cadastrar</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4 uppercase center-align">
                    <div class="card blue-grey">
                        <div class="card-image">
                            <img src="img/bramex.jpg">
                            <span class="card-title"><strong>BRAMEX</strong></span>
                        </div>

                        <div class="card-action hoverable">
                            <a href="" class="white-text">Cadastrar</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col s12 m4 uppercase center-align">
                    <div class="card blue-grey">
                        <div class="card-image">
                            <img src="img/bracol.jpg">
                            <span class="card-title"><strong>Bracol</strong></span>
                        </div>

                        <div class="card-action hoverable">
                            <a href="aeri_novo_edital_uefs.php" class="white-text">Cadastrar</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4 uppercase center-align">
                    <div class="card blue-grey">
                        <div class="card-image">
                            <img src="img/uebas.jpg">
                            <span class="card-title"><strong>UEBA'S</strong></span>
                        </div>

                        <div class="card-action hoverable">
                            <a href="" class="white-text">Cadastrar</a>
                        </div>
                    </div>
                </div>

            </div>

            <b class="orange-text">Todos os editais</b>
            <br>

            <table class="bordered">
                <thead>
                    <tr>
                        <th>Número</th>
                        <th>Tipo</th>   
                        <th>Inscritos</th> 
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    $query = "SELECT * FROM editais";
                    $resultado = conecta_seleciona($query);

                    while ($res = mysqli_fetch_assoc($resultado)) {

                        $query2 = "SELECT * FROM candidaturas WHERE edital='" . $res['numero_edital'] . "'";
                        $resultado2 = conecta_seleciona($query2);
                        $numero_inscritos = mysqli_num_rows($resultado2);

                        echo('<tr><td>' . $res['numero_edital'] . '</td>');

                        echo('<td>' . $res['tipo_intercambio'] . '</td>');
                        
                        echo('<td>' . $numero_inscritos . '</td>');

                        echo('<td><form style="display: inline;" method="post" action="aeri_detalhes_edital.php" > <input type="hidden" name="edital" value="' . $res['numero_edital'] . '"/>
                         <button class="btn waves-effect waves-light blue-grey " type="submit" name="detalhes"> Detalhes </button> </form>
                         
                        <form style="display: inline;" method="post" action="aeri_arquivos_edital.php" > 
                        <input type="hidden" name="edital" value="' . $res['numero_edital'] . '"/>                 
                        <button class="btn waves-effect waves-light blue-grey " type="submit" formtarget="_blank" name="arquivos">  Arquivos </button> 
                        </form>
                        </td></tr>');
                    }
                    ?>

                </tbody>
            </table>

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