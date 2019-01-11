<?php
session_start();

if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_uteis.php');

$id = $_POST['id'];
?>

<!DOCTYPE html>
<html lang="pt-br">
    
    <head>
        <?php
        include("topo_pagina.php");
        ?>
    </head>
    
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

                <h4 class="center-align uppercase">Detalhes do Recurso</h4>

                <b class="red-text"> Dados pessoais</b>

                <?php
                $query = "SELECT * FROM candidato_recursos WHERE id='" . $id . "'";
                $resultado = conecta_seleciona($query);
                $res = mysqli_fetch_assoc($resultado);
                ?>

                <p>Edital: <span style="color: #737373"> <?php echo($res['edital']); ?></span></p>

                <p>Data: <span style="color: #737373"> <?php echo($res['data']); ?> </span></p>

                <p>Explanação: <span style="color: #737373"> <?php echo($res['explanacao']); ?> </span></p>
                  
                <br><br>
                
                <b class="red-text">Resultado</b>

                <p>Status: <span style="color: #737373"> <?php echo($res['status']); ?> </span></p>

                <p>Justificativa da comissão: <span style="color: #737373"> <?php echo($res['justificativa']); ?> </span></p>
                   
            </section>

        </main>


        <div class="espacamento"></div>

        <?php
        include("rodape_pagina.php");
        include ("script.php");
        ?>

    </body>
</html>