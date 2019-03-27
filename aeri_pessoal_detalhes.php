<?php
session_start();
if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_banco_de_dados.php');
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
            <h4 class="center-align uppercase">Servidor</h4>

            <b>Dados cadastrados</b>
            <?php
            $query = "SELECT * FROM servidores A INNER JOIN perfis_usuario B ON A.tipo = B.codigo WHERE matricula='" . $matricula . "'";
            $resultado = conecta_seleciona($query);
            $res = mysqli_fetch_assoc($resultado);
            ?>

            <p>Nome: <span style="color: #737373"> <?php echo($res['nome']); ?></span></p>

            <p>E-mail: <span style="color: #737373"> <?php echo($res['email']); ?> </span></p>

            <p>Matrícula: <span style="color: #737373"> <?php echo($res['matricula']); ?> </span></p>

            <p>Tipo: <span style="color: #737373"> <?php echo($res['titulo_tipo']); ?> </span></p>

            <p>Senha: <span style="color: #737373"> <?php echo($res['senha']); ?> </span></p>

            <hr>

            <b>Ações</b>

            <br><br>

            <form style="display: inline;" method="post" action="aeri_editar_colaborador.php" >    
                <input type="hidden" name="matricula" value="<?php echo($res['matricula']); ?>"/>  
                <button class="btn waves-effect waves-light blue-grey " type="submit" name="editar"> Editar</button> 
            </form>
            
            <button class="btn waves-effect waves-light red darken-4" type="submit" name="novo_colaborador"> Excluir</button> 
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