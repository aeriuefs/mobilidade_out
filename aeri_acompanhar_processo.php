<?php
session_start();
if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_banco_de_dados.php');
require_once('funcoes_uteis.php');

$edital = $_POST['edital'];
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

            <h4 class="center-align uppercase">Acompanhar processo de candidatura</h4>

            <p>Você pode acompanhar os passos do processo de candidatura nos cartões abaixo. Os cartões estão organizados de forma cronológica. Desta forma, o cartão que está no topo apresenta a situação atual do aluno.</p>
            <b class="blue-grey-text">Histórico</b>
            <br><br>
            
            <?php
            $query = "SELECT * FROM historico_candidatos WHERE matricula='" . $matricula . "' AND edital='" . $edital . "'";
            $resultado = conecta_seleciona($query);

            while ($res = mysqli_fetch_assoc($resultado)) {

                echo ('
                    <div class="row">
                    <div class="col s12 m6">

                        <div class="card  indigo darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">' . $res['titulo'] . '</span>
                                    <span class="new badge blue" data-badge-caption="">' . $res['data'] . '</span>
                                <p>' . $res['informacao'] . '</p>
                            </div>
                        </div>
                    </div>
                    
                </div>      
                <div class="row">
                    <div class="col s12 m6">
                        
                    </div>
                </div>');
            }
            ?>
            
            <b class="blue-grey-text">Adicionar novo evento</b>

            <br>
            <br>

            <form class="col s12" action="bd_aeri_add_evento_candidatura.php" method="post">

                <input type="hidden" name="edital" value="<?php echo ($edital) ?>"/>   
                <input type="hidden" name="matricula" value="<?php echo ($matricula) ?>"/> 
                
                <div class="row">

                    <div class="input-field col l12 m12 s12">
                        <select name="codigo">
                            <option value="" disabled selected>Selecione o evento</option>
                            <option value="1">Inscrição em Análise</option>
                            <option value="2">Inscrição Homologada</option>
                            <option value="3">Inscrição não Homologada</option>
                            <option value="4">Inscrição homologada (Recurso)</option>
                            <option value="5">Inscrição não homologada (Recurso)</option>
                            <option value="6">Candidato aprovado proficiência</option>
                            <option value="7">Candidato reprovado proficiência</option>
                            <option value="8">Candidato aprovado proficiência (Recurso)</option>
                            <option value="9">Candidato reprovado proficiência (Recurso)</option>
                            <option value="10">Candidato aprovado CCint</option>
                            <option value="11">Candidato reprovado CCint</option>
                            <option value="12">Candidato aprovado CCint (Recurso)</option>
                            <option value="13">Candidato reprovado CCint (Recurso)</option>
                            <option value="14">Inscrição aprovada em Intercâmbio</option>
                            <option value="15">Inscrição reprovada em Intercâmbio</option>
                        </select>
                        <label>Evento</label>
                    </div>

                </div>

                <div class="row">

                    <div class="input-field col l12 m12 s12">
                        <input type="text" id="informacao" name="informacao" class="materialize-textarea"></textarea>
                        <label for="informacao">Adicionar informação</label>
                    </div>

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

    <script>

        $(document).ready(function () {
            $('select').material_select();
        });

    </script>
</body>
</html>