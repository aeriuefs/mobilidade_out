<?php
require_once('funcoes_uteis.php');

verificar_sessao();

require_once('funcoes_de_arquivos.php');
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

        <!--Main-->
        <main>

            <?php
            include("parallax.php");
            ?>

            <section class="section container">
                <h4 class="center-align uppercase">Tópicos de ajuda</h4>

                <p>Logo abaixo você pode visualizar os tópicos de ajuda disponíveis. Caso não encontre o que procura, nos mande uma mensagem atráves da página Contato disponível no barra superior deste site.</p>

                <div class="row">                                 
                    <table class="striped">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>

                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td> <img src="img/icones/ajuda.ico"  width="30" height="30" /></td>
                                <td>Como realizar a inscrição em um edital?</td>
                                <td>
                                    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Visualizar ajuda</a>

                                    <!-- Modal Structure -->
                                    <div id="modal1" class="modal">
                                        <div class="modal-content">
                                            <h4>Como realizar a inscrição em um edital?</h4>
                                            <p>Quando o período de inscrição de um algum edital estiver aberto, esta opção estará disponível na sessão 
                                                “Inscrições”. Ao entrar nesta sessão, poderá visualizar o botão de inscrição. 
                                                Clicando neste botão você será redirecionado para a ficha de inscrição do edital.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Entendi</a>
                                        </div>
                                    </div>
                                    
                                </td>
                            </tr>

                            <tr>
                                <td> <img src="img/icones/ajuda.ico"  width="30" height="30" /></td>
                                <td>Como posso alterar meus dados pessoais?</td>
                                <td>
                                    <a class="waves-effect waves-light btn modal-trigger" href="#modal2">Visualizar ajuda</a>

                                    <!-- Modal Structure -->
                                    <div id="modal2" class="modal">
                                        <div class="modal-content">
                                            <h4>Como posso alterar meus dados pessoais?</h4>
                                            <p>Você pode alterar seus dados pessoais na sessão “Cadastro”. Lá você deverá preencher algumas 
                                                informações importantes como data de nascimento, número de passaporte e dados bancários. </p>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Entendi</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td> <img src="img/icones/ajuda.ico"  width="30" height="30" /></td>
                                <td>Como posso anexar novos documentos?</td>
                                <td>
                                    <a class="waves-effect waves-light btn modal-trigger" href="#modal3">Visualizar ajuda</a>

                                    <!-- Modal Structure -->
                                    <div id="modal3" class="modal">
                                        <div class="modal-content">
                                            <h4>Como posso anexar novos documentos?</h4>
                                            <p>Novos documentos podem ser enviados para AERI quando forem solicitados pela mesma. Neste caso você pode usar a 
                                                sessão “Documentos”, escolher o edital e então enviar os arquivos. Não é possível anexar novos documentos
                                                as inscrições. Certifique-se de enviar todos no momento de inscrição. </p>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Entendi</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>

            </section>

        </main>
        <!--END MAIN-->

        <div class="espacamento"></div>

        <?php
        include("rodape_pagina.php");
        include("scripts.php");
        ?>

    </body>
</html>