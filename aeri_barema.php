<?php
require_once('funcoes_banco_de_dados.php');
require_once('funcoes_uteis.php');
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
            include("navbar_aeri_1.php");
            ?>
        </header>

        <main>

            <?php
            include("parallax.php");
            ?>

            <section class="section container">

                <h4 class="center-align uppercase">Barema de avaliação</h4> 

                <br>

                <b>Nome:</b> Júlio César Andrade Silva <br><b>Matrícula:</b> 22222267 <br><b>Curso:</b> Engenharia de Computação

                <h6 class="center-align uppercase orange-text">Plano de trabalho</h6>

                <form class="col s12">

                    <table class="bordered highlight responsive-table">
                        <thead>
                            <tr>
                                <th>Critério</th>
                                <th>Nota</th>                                
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Estrutura do texto, contemplando os itens propostos (até 2,0)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Objetividade (até 6,0)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Clareza na escolha da IES e das disciplinas (até 2,0)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                        </tbody>                      
                    </table>

                    <br>
                    <h6 class="uppercase center-align orange-text">Participações /Organizações em/de Reuniões/Eventos por área de formação (máx 10 pontos)</h6>
                    <br>
                    <table class="bordered highlight responsive-table">
                        <thead>
                            <tr>
                                <th>Critério</th>
                                <th>Nota</th>                                
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Comunicação oral (1 ponto)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Apresentação de pôster (1 ponto)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Integrante de mesa redonda, conferencista/palestrante (1 ponto)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Coordenação de reuniões/eventos científicos (1 ponto)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>

                            <tr>
                                <td>Coordenação de mesa/debatedor (1 ponto)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Ministrante de oficina/mini-curso (1 ponto)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Participante de oficina/mini-curso (0,25 ponto)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Membro de comissão organizadora (0,50 ponto)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Monitor de evento (0,25 ponto)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Participação em eventos (0,10 ponto)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Premiação (até 2,0)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Participação em eventos da AERI (0,50 ponto)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Curso livre (+ 30 horas) (1,0 ponto)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Curso de idioma (1,0 ponto por ano)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Outras atividades relevantes (área de formação) (até 1,0)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                        </tbody>                      
                    </table>
                    <br>
                    <h6 class="uppercase center-align orange-text">Indicadores de Produção Científica, Tecnológica e Artística</h6>

                    <table class="bordered highlight responsive-table">
                        <thead>
                            <tr>
                                <th>Critério</th>
                                <th>Nota</th>                                
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Artigos completos publicados em periódicos (5 pontos)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Textos em jornais de notícias/revistas (1 ponto)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Resumos publicados em anais (0,50 ponto)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Resumos expandidos publicados em anais (1 ponto)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Trabalhos completos publicados em anais (5 pontos)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Exposições ou apresentações artísticas (5 pontos)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                        </tbody> 

                    </table>
                    <br>
                    <h6 class="uppercase center-align  orange-text">Representação/Liderança Estudantil em instâncias da Universidade (máx 10 pontos)</h6>

                    <table class="bordered highlight responsive-table">
                        <thead>
                            <tr>
                                <th>Critério</th>
                                <th>Nota</th>                                
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Representação por ano (1 ponto)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Cargo de liderança por ano (1 ponto)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                        </tbody>                      
                    </table>
                    <br>

                    <h6 class="uppercase center-align  orange-text">Participação em Programa Acadêmico Institucional ou Estágios (máx 10 pontos)</h6>

                    <table class="bordered highlight responsive-table">
                        <thead>
                            <tr>
                                <th>Critério</th>
                                <th>Nota</th>                                
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Bolsista (5 pontos)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Voluntário (5 pontos)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Estágio Curricular não obrigatório (5 pontos)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                        </tbody>                      
                    </table>
                    <br>

                    <h6 class="uppercase center-align  orange-text">Carta de Recomendação</h6>

                    <table class="bordered highlight responsive-table">
                        <thead>
                            <tr>
                                <th>Critério</th>
                                <th>Nota</th>                                
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Capacidade de aprender novas idéias</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Capacidade de trabalhar e persistência</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Motivação, entusiasmo e interesse</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Capacidade de resolver problemas</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Capacidade de resolver problemas</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Expressão escrita</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Expressão oral</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>

                        </tbody>                      
                    </table>
                    <br>

                    <h6 class="uppercase center-align  orange-text">Outros</h6>

                    <table class="bordered highlight responsive-table">
                        <thead>
                            <tr>
                                <th>Critério</th>
                                <th>Nota</th>                                
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Informações adicionais fornecidas (até 2,0)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                            <tr>
                                <td>Mérito do candidato (até 3,0)</td>
                                <td><input id="nota_" name="nota_" type="text"></td>
                            </tr>
                        </tbody>                      
                    </table>

                </form>

                <div class="fixed-action-btn">

                    <a class="btn-floating btn-large waves-effect waves-light blue modal-trigger" href="#modal1"><i class="material-icons">folder_shared</i></a>

                </div>

                <div id="modal1" class="modal bottom-sheet">
                    <div class="modal-content">
                        <h5>Arquivos do Estudante</h5>
                        <table class="striped">
                            <thead>
                                <tr>
                                    <th>Tipo</th>
                                    <th>Nome</th>
                                    <th>Ações</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $caminho_edital = str_replace('/', '-', "01/2018");
                                $caminho = 'arquivos/editais/' . $caminho_edital . '/candidatos/' . "11111161" . '/';
                                $diretorio = dir($caminho);
                                while (($arquivo_1 = $diretorio->read()) !== false) {

                                    if (strrchr($arquivo_1, '.') == '.pdf') {

                                        echo '<tr><td> <img src = "img/icones/pdf.png" width = "30" height = "30" /></td>
                            <td>' . $arquivo_1 . '</td>
                            <td> <a href=' . $caminho . $arquivo_1 . ' download="' . $arquivo_1 . '">' . 'Download' . '</a></td></tr>';
                                    }
                                }

                                $diretorio->close();
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fechar</a>
                    </div>
                </div>

                <br><br>

                <p><b class="red-text">ATENÇÃO:</b> O botão <b class="blue-text">Salvar</b> guarda as informações preenchidas para que você possa continuar posteriormente. Em contra partida, o 
                    botão <b class="orange-text">Finalizar</b> fecha o formulário, salva as informações e as envia para a coordenação da AERI. </p>

                <button class="btn waves-effect waves-light blue " type="submit" name="detalhes"> Salvar </button>
                <button class="btn waves-effect waves-light orange " type="submit" name="detalhes"> Finalizar </button>


            </section>

        </main>

        <?php
        include("rodape_aeri.php");
        include("scripts.php");
        ?>

    </body>

</html>