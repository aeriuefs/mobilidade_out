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

        <!--Main-->
        <main>

            <?php
            include("parallax.php");
            ?>

            <section class="section container">

                <h4 class="center-align uppercase">Cadastro de Candidato</h4>

                <form class="col s12" action="bd_candidato_atualizar_dados_pessoais.php" method="POST">

                    <?php
                    $query = "SELECT * FROM candidatos WHERE matricula='" . $_SESSION['matricula'] . "'";
                    $resultado = conecta_seleciona($query);
                    $res = mysqli_fetch_assoc($resultado);
                    ?>

                    <b class="orange-text">Dados Pessoais</b>

                    <div class="row">

                        <div class="input-field col l6 m6 s12">
                            <input  id="nome" type="text" name="nome" class="validate" required value="<?php echo($res['nome']); ?>" pattern="[a-zA-Z\s]+">
                            <label for="nome">Nome Completo</label>
                        </div>

                        <div class="input-field col l6 m6 s12">

                            <SELECT NAME = "sexo" SIZE=1>

                                <option value="Feminino" <?php echo(($res['sexo'] == 'Feminino') ? "selected" : ""); ?> >Feminino</option>
                                <option value="Masculino" <?php echo(($res['sexo'] == 'Masculino') ? "selected" : ""); ?> >Masculino</option>

                            </SELECT>
                            
                        </div>

                    </div>

                    <div class="row">

                        <div class="input-field col l6 m6 s12">
                            <input  id="matricula" type="number" name="matricula" class="validate" value="<?php echo($res['matricula']); ?>" required>
                            <label for="matricula">Matrícula</label>
                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input  id="cpf" type="number" name="cpf" class="validate" value="<?php echo($res['cpf']); ?>" required>
                            <label for="cpf">CPF</label>
                        </div>

                    </div>

                    <div class="row">

                        <div class="input-field col l6 m6 s12 ">
                            <input  id="rg" type="number" name="rg" class="validate" value="<?php echo($res['rg']); ?>" required>
                            <label for="rg">Registro geral (RG)</label>
                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input  id="orgao_expedidor" type="text" name="orgao_expedidor" class="validate" value="<?php echo($res['orgao_expedidor']); ?>" required>
                            <label for="orgao_expedidor">Orgão expedidor</label>
                        </div>

                    </div>

                    <label>Data de nascimento</label>
                    <div class="row">

                        <div class="input-field col l6 m6 s12">

                            <input type="date"  class="validate" name="data_nascimento" value="<?php echo($res['data_nascimento']); ?>" >

                        </div>

                        <div class="input-field col l6 m6 s12">

                            <SELECT NAME = "curso" SIZE=1>

                                <?php
                                $query = "SELECT * FROM cursos";
                                $resultado_cursos = conecta_seleciona($query);

                                if ($res['curso'] == '') {
                                    echo '<option value="" disabled selected>Selecione seu curso</option>';
                                }

                                while ($lista_cursos = mysqli_fetch_assoc($resultado_cursos)) {

                                    echo ('<OPTION value = "' . $lista_cursos['nome'] . '"' . (($lista_cursos['nome'] == $res['curso']) ? "selected" : "") . '>' . $lista_cursos['nome']);
                                }
                                ?>

                            </SELECT>
                        </div>

                    </div>

                    <b class="orange-text">Contato</b>

                    <div class="row">

                        <div class="input-field col l6 m6 s12 ">
                            <input  id="telefone" type="text" class="validate" name="telefone_fixo" value="<?php echo($res['telefone']); ?>">
                            <label for="telefone">Telefone Fixo</label>
                        </div>

                        <div class="input-field col l6 m6 s12 ">
                            <input  id="celular" type="text" class="validate" name="celular" value="<?php echo($res['celular']); ?>">
                            <label for="celular">Celular</label>
                        </div>

                    </div>

                    <div class="row">

                        <div class="input-field col l6 m6 s12">
                            <input id="email" type="email" name="email" class="validate" required value="<?php echo($res['email']); ?>">
                            <label for="email">E-mail</label>
                        </div>

                    </div>


                    <b class="orange-text">Pesquisa de indicadores socioeconômicos</b>

                    <div class="row">

                        <div class="input-field col l6 m6 s12">
                            <p>Forma de ingresso </p>
                            <p>

                                <input name="forma_ingresso" type="radio" id="cotista" value="1" <?php echo(($res['forma_ingresso'] == '1') ? "checked" : ""); ?> />
                                <label for="cotista">Cotista</label>

                            </p>

                            <p>

                                <input name="forma_ingresso" type="radio" id="quilombola" value="2" <?php echo(($res['forma_ingresso'] == '2') ? "checked" : ""); ?> />
                                <label for="quilombola">Quilombola</label>

                            </p>

                            <p>

                                <input name="forma_ingresso" type="radio" id="indigena" value="3" <?php echo(($res['forma_ingresso'] == '3') ? "checked" : ""); ?> />
                                <label for="indigena">Indígena</label>

                            </p>

                            <p>

                                <input name="forma_ingresso" type="radio" id="nao_cotista" value="4" <?php echo(($res['forma_ingresso'] == '4') ? "checked" : ""); ?> />
                                <label for="nao_cotista">Não cotistista</label>

                            </p>

                            <p>

                                <input name="forma_ingresso" type="radio" id="nao_informado" value="0" <?php echo(($res['forma_ingresso'] == '0') ? "checked" : ""); ?> />
                                <label for="nao_informado">Não informado</label>

                            </p>

                        </div>

                        <div class="input-field col l6 m6 s12">

                            <p>Aluno residente</p>
                            <p>
                                <input type="checkbox" id="aluno_residente" name="aluno_residente" value="1" <?php echo(($res['aluno_residente'] == '1') ? "checked" : ""); ?>/>
                                <label for="aluno_residente">Sim. Sou morador da residência universitária.</label>
                            </p>

                        </div>

                    </div>

                    <div class="row">

                        <button class="btn waves-effect waves-light blue-grey " type="submit" name="Cadastrar">Atualizar Cadastro
                        </button>

                    </div>

                </form>
            </section>

        </main>

        <?php
        include("rodape_pagina.php");
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