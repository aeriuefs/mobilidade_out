
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
            include("navbar_aeri_1.php");
            ?>
        </header>

        <main>

            <?php
            include("parallax.php");
            ?>

            <section class="section container">

                <h4 class="center-align uppercase">Avalição Recurso</h4> 

                <b class="orange-text"> Dados do recurso:</b>

                <p>Matrícula do estudante: <span style="color: #737373"> 11111163</span></p>

                <p>Edital: <span style="color: #737373"> 07/2018</span></p>

                <p>Data: <span style="color: #737373"> 25/09/2018</span></p>

                <strong>Assunto:</strong>

                <p> Solicitação da revisão dos certificados entregues.</p>
                
                <b>Documento: </b> <a>Download</a> <br><br>
                

                <b class="orange-text"> Parecer do avaliador:</b>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="resposta_avaliador" name="resposta_avaliador" class="materialize-textarea" data-length="120"></textarea>
                        <label for="resposta_avaliador">Resposta da AERI</label>
                    </div>

                </div>

                <a class="waves-effect waves-light btn modal-trigger" href="">Salvar</a>

              

            </section>

        </main>

        <?php
        include("rodape_aeri.php");
        include("scripts.php");
        ?>

    </body>

</html>