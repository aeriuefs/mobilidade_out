<?php
require_once('funcoes_uteis.php');

verificar_sessao();

require_once('funcoes_de_arquivos.php');
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

                <h4 class="center-align uppercase">Atualização de Cadastro</h4>

                <form class="col s12" action="bd_candidato_atualizar_dados_pessoais.php" method="POST">

                    <?php
                    $query = "SELECT * FROM candidatos WHERE matricula='" . $_SESSION['matricula'] . "'";
                    $resultado = conecta_seleciona($query);
                    $res = mysqli_fetch_assoc($resultado);
                    ?>

                    <b>Dados Pessoais</b>

                    <div class="row">

                        <div class="input-field col l6 m6 s12">
                            <input  id="nome" type="text" name="nome" class="validate" value="<?php echo($res['nome']); ?>">
                            <label for="nome">Nome Completo</label>
                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input id="email" type="email" name="email" class="validate" value="<?php echo($res['email']); ?>">
                            <label for="email">E-mail</label>
                        </div>

                    </div>

                    <div class="row">

                        <div class="input-field col l6 m6 s12">
                            <input  id="cpf" type="number" name="cpf" class="validate" value="<?php echo($res['cpf']); ?>">
                            <label for="cpf">CPF</label>
                        </div>

                        <div class="input-field col l6 m6 s12">



                            <SELECT NAME = "curso" SIZE=1>

                                <?php
                                $query = "SELECT * FROM cursos";
                                $resultado_cursos = conecta_seleciona($query);
                                
                                if($res['curso']==''){
                                echo '<option value="" disabled selected>Selecione seu curso</option>';
                                }
                                
                                while ($lista_cursos = mysqli_fetch_assoc($resultado_cursos)) {

                                    echo ('<OPTION value = "' . $lista_cursos['nome'] . '"' . (($lista_cursos['nome'] == $res['curso']) ? "selected" : "") . '>' . $lista_cursos['nome']);
                                }
                                ?>

                            </SELECT>
                        </div>

                    </div>

                    <div class="row">

                        <div class="input-field col l6 m6 s12 ">
                            <input  id="rg" type="number" name="rg" class="validate" value="<?php echo($res['rg']); ?>">
                            <label for="rg">Registro geral (RG)</label>
                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input  id="orgao_expedidor" type="text" name="orgao_expedidor" class="validate" value="<?php echo($res['orgao_expedidor']); ?>">
                            <label for="orgao_expedidor">Orgão expedidor</label>
                        </div>

                    </div>

                    <div class="row">

                        <p>
                            <input name="sexo" type="radio" id="feminino" value="F" <?php echo(($res['sexo'] == 'F') ? "checked" : ""); ?> />
                            <label for="feminino">Sou do sexo feminino.</label>
                        </p>

                        <p>
                            <input name="sexo" type="radio" id="masculino" value="M" <?php echo(($res['sexo'] == 'M') ? "checked" : ""); ?>/>
                            <label for="masculino">Sou do sexo masculino.</label>
                        </p>


                    </div>

                    <div class="row">

                        <div class="input-field col l6 m6 s12 ">
                            <input  id="telefone" type="text" class="validate" name="telefone" value="<?php echo($res['telefone']); ?>" >
                            <label for="telefone">Telefone</label>
                        </div>

                        <div class="input-field col l6 m6 s12 ">
                            <input  id="telefone" type="text" class="validate" name="passaporte" value="<?php echo($res['passaporte']); ?>" >
                            <label for="telefone">Passaporte</label>
                        </div>

                    </div>

                    <label>Data de nascimento</label>
                    <div class="row">

                        <div class="input-field col l6 m6 s12">

                            <input type="date"  class="validate" name="data_nascimento" value="<?php echo($res['data_nascimento']); ?>" >

                        </div>

                    </div>

                    <b>Pesquisa de indicadores socioeconômicos</b>

                    <p>Forma de ingresso </p>

                    <div class="row">

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
                            <label for="nao_cotista">Não informado</label>

                        </p>
                    </div>

                    <div class="row">
                        <p>Aluno residente</p>
                        <p>

                            <input type="checkbox" id="aluno_residente" name="aluno_residente" value="1" <?php echo(($res['aluno_residente'] == '1') ? "checked" : ""); ?>/>
                            <label for="aluno_residente">Sim. Sou morador da residência universitária.</label>
                        </p>

                    </div>

                    <div class="row">

                        <button class="btn waves-effect waves-light blue-grey " type="submit" name="entrar">Atualizar dados

                            <i class="material-icons right">chevron_right</i>

                        </button>

                    </div>

                </form>

            </section>

        </main>

        <?php
        include("rodape_pagina.php");
        include("scripts.php");
        ?>

    </body>
</html>