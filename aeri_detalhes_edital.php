<?php
session_start();
if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

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


            <h4 class="center-align uppercase">Dados do Edital</h4> 

            <br><br>

            <b>Detalhes do edital</b>

            <?php
            $query = "SELECT * FROM editais WHERE numero_edital='" . $edital . "'";
            $resultado = conecta_seleciona($query);
            $res = mysqli_fetch_assoc($resultado);
            ?>

            <p>Número do edital: <span style="color: #737373"> <?php echo($res['numero_edital']); ?></span></p>

            <p>Tipo de intercâmbio: <span style="color: #737373"> <?php echo($res['tipo_intercambio']); ?> </span></p>

            <p>Número de vagas: <span style="color: #737373"> <?php echo($res['numero_vagas']); ?> </span></p>

            <p>Fim do prazo de inscrição: <span style="color: #737373"> <?php echo($res['inicio_inscricao']); ?> </span></p>

            <p>Início do prazo de inscrição: <span style="color: #737373"> <?php echo($res['fim_inscricao']); ?> </span></p>

            <br>

            <form style="display: inline;" method="post" action="aeri_editar_edital.php" > 
                <input type="hidden" name="edital" value="<?php echo($res['numero_edital']); ?>"/>
                <button class="btn waves-effect waves-light blue-grey " type="submit" name="edital_edital"> Editar </button>                 
            </form>

            <form style="display: inline;" method="post" action="" > 
                <input type="hidden" name="edital" value="<?php echo($res['numero_edital']); ?>"/>                 
                <button class="btn waves-effect waves-light red darken-4 " type="submit" name="excluir_edital"> Excluir </button> 
            </form>

            <hr>

            <br>
            
            <b>Alunos Inscritos</b>

            <br>

            <table class="striped">
                <thead>
                    <tr>
                        <th>Nº</th>
                        <th>Matrícula</th>
                        <th>Nome</th>                       
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $i = 1;
                    $query = "SELECT * FROM candidaturas WHERE edital='" . $edital . "'";
                    $resultado = conecta_seleciona($query);
                    
                    while ($res = mysqli_fetch_assoc($resultado)) {
                        
                        echo('<tr><td>' . $i . '</td>');
                        echo('<td>' . $res['matricula'] . '</td>');
                        echo('<td>' . $res['nome'] . '</td>');
                       
                        echo('<td><form style="display: inline;" method="post" action="aeri_detalhes_candidatura.php" > <input type="hidden" name="matricula" value="' . $res['matricula'] . '"/>
                            <input type="hidden" name="edital" value="' . $res['edital'] . '"/>
                         <button class="btn waves-effect waves-light blue-grey " type="submit" name="detalhes"> Detalhes </button> </form></td></tr>');
                    
                        $i++;
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