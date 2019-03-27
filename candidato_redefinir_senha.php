<!DOCTYPE html>
<?php
require_once('funcoes_banco_de_dados.php');
require_once('funcoes_uteis.php');

$matricula = $_POST['matricula'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$data_nascimento = $_POST['data_nascimento'];

$query = "SELECT matricula, cpf, rg, data_nascimento FROM candidatos WHERE matricula='$matricula'";

$result = conecta_seleciona($query);
$row = mysqli_fetch_row($result);

if (mysqli_num_rows($result) > 0 && $cpf=$row[1] && $rg==$row[2] && $data_nascimento==$row[3] ) {
    
    echo "<script>alert('Conferimos seus dados. Tudo certo!');</script>"; 
 
} else {
    
    echo "<script>alert('Não identificamos sua matrícula.');</script>"; 
    header('refresh: 0; url=index.php');
}

?>
<html lang="pt-br">

    <?php
    include("topo_pagina.php");
    
    ?>

    <body>

        <header>
            <?php
            include("navbar_login.php");
            ?>
        </header>

        <!--Main-->
        <main>

            <?php
            include("parallax_home.php");
            ?>

            <section class="section container">

                <h4 class="center-align uppercase">Redefinir senha do Candidato</h4>

                <form class="col s12" action="bd_candidato_alterar_senha.php" method="POST">

                    <p>Digite a sua nova senha e confime. Logo após salvar a nova senha, você será redirecionado
                    para a página de login onde você deve usar sua matrícula e sua nova senha para acessar o sistema.</p>
                    
                    <div class="row">

                        <input type="hidden" name="matricula" value="<?php echo($matricula); ?>"/>
                        
                        <div class="input-field col l6 m6 s12">
                            <input id="senha" type="password" name="senha" class="validate" required>
                            <label for="senha">Senha nova</label>
                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input id="confirmacao_senha" type="password" name="confirmacao_senha" class="validate" oninput="validaSenha(this)" required>
                            <label for="confirmacao_senha">Confirmar senha</label>
                        </div>

                    </div>

                    <div class="row">

                        <button class="btn waves-effect waves-light indigo lighten-2 " type="submit" name="Cadastrar">
                            Atualizar
                        </button>

                    </div>

                </form>

            </section>

        </main>

        <?php
        include("rodape_pagina.php");
        include("scripts.php");
        ?>

        <script>

            function validaSenha(input) {
                if (input.value != document.getElementById('senha').value) {
                    input.setCustomValidity('Repita a senha corretamente');
                } else {
                    input.setCustomValidity('');
                }
            }

        </script>

    </body>
</html>