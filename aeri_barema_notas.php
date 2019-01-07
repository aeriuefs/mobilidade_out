<?php
session_start();
if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}
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
            include("navbar_aeri.php");
            ?>
        </header>

        <main>

            <section class="section container">

                <h4 class="center-align uppercase">NOTAS DO CANDIDATO</h4> 

                <b>Nome:</b> Júlio César Andrade Silva <br><b>Matrícula:</b> 22222267 <br><b>Curso:</b> Engenharia de Computação

                <table class="striped">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Nota</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr><td colspan="2" class="center-align"><b>Plano de trabalho</b></td></tr>

                        <tr><td>Estrutura do texto, contemplando os itens propostos (até 2,0): </td><td>2,0</td></tr>
                        <tr><td>Objetividade (até 6,0): </td><td>5,0</td></tr>
                        <tr><td>Clareza na escolha da IES e das disciplinas (até 2,0): </td><td>1,5</td></tr>

                        <tr><td colspan="2" class="center-align"><b>Participações /Organizações em/de Reuniões/Eventos por área de formação (máx 10 pontos)</b></td></tr>

                        <tr><td>Comunicação oral (1 ponto): </td><td>1,0</td></tr>
                        <tr><td>Apresentação de pôster (1 ponto): </td><td>1,0</td></tr>
                        <tr><td>Integrante de mesa redonda, conferencista/palestrante (1 ponto): </td><td>1,0</td></tr>
                        <tr><td>Coordenação de reuniões/eventos científicos (1 ponto): </td><td>1,0</td></tr>
                        <tr><td>Coordenação de mesa/debatedor (1 ponto): </td><td>1,0</td></tr>
                        <tr><td>Ministrante de oficina/mini-curso (1 ponto): </td><td>1,0</td></tr>
                        <tr><td>Participante de oficina/mini-curso (0,25 ponto): </td><td>0,25</td></tr>
                        <tr><td>Membro de comissão organizadora (0,50 ponto): </td><td>0,50</td></tr>
                        <tr><td>Monitor de evento (0,25 ponto): </td><td>0,25</td></tr>
                        <tr><td>Participação em eventos (0,10 ponto): </td><td>0,10</td></tr>
                        <tr><td>Premiação (até 2,0): </td><td>2,0</td></tr>
                        <tr><td>Participação em eventos da AERI (0,50 ponto): </td><td>0,50</td></tr>
                        <tr><td>Curso livre (+ 30 horas) (1,0 ponto): </td><td>1,0</td></tr>
                        <tr><td>Curso de idioma (1,0 ponto por ano): </td><td>1,0</td></tr>
                        <tr><td>Outras atividades relevantes (área de formação) (até 1,0): </td><td>1,0</td></tr>

                        <tr><td colspan="2" class="center-align"><b>Indicadores de Produção Científica, Tecnológica e Artística</b></td></tr>

                        <tr><td>Artigos completos publicados em periódicos (5 pontos): </td><td>5</td></tr>
                        <tr><td>Textos em jornais de notícias/revistas (1 ponto): </td><td>1</td></tr>
                        <tr><td>Resumos publicados em anais (0,50 ponto): </td><td>0,50</td></tr>
                        <tr><td>Resumos expandidos publicados em anais (1 ponto): </td><td>1</td></tr>
                        <tr><td>Trabalhos completos publicados em anais (5 pontos): </td><td>5</td></tr>
                        <tr><td>Exposições ou apresentações artísticas (5 pontos): </td><td>5</td></tr>

                        <tr><td colspan="2" class="center-align"><b>Representação/Liderança Estudantil em instâncias da Universidade (máx 10 pontos)</b></td></tr>

                        <tr><td>Representação por ano (1 ponto): </td><td>1</td></tr>
                        <tr><td>Cargo de liderança por ano (1 ponto): </td><td>1</td></tr>

                        <tr><td colspan="2" class="center-align"><b>Participação em Programa Acadêmico Institucional ou Estágios (máx 10 pontos)</b></td></tr>

                        <tr><td>Bolsista (5 pontos): </td><td>5</td></tr>
                        <tr><td>Voluntário (5 pontos): </td><td>5</td></tr>
                        <tr><td>Estágio Curricular não obrigatório (5 pontos): </td><td>5</td></tr>

                        <tr><td colspan="2" class="center-align"><b>Carta de Recomendação</b></td></tr>

                        <tr><td>Capacidade de aprender novas idéias: </td><td></td></tr>
                        <tr><td>Capacidade de trabalhar e persistência: </td><td>1,0</td></tr>
                        <tr><td>Motivação, entusiasmo e interesse: </td><td>1,0</td></tr>
                        <tr><td>Capacidade de resolver problemas: </td><td>1,0</td></tr>
                        <tr><td>Imaginação e criatividade: </td><td>1,0</td></tr>
                        <tr><td>Expressão escrita: </td><td>1,0</td></tr>
                        <tr><td>Expressão oral: </td><td>1,0</td></tr>

                        <tr><td colspan="2" class="center-align"><b>Outros</b></td></tr>

                        <tr><td>Informações adicionais fornecidas (até 2,0): </td><td>1,0</td></tr>
                        <tr><td>Mérito do candidato (até 3,0): </td><td>1,0</td></tr>

                    </tbody>
                </table>

                <br><br>
                
                <hr>
                
                <h4 class="center-align uppercase">Reavaliação</h4> 
                

                <p><b class="red-text">ATENÇÃO:</b> Você pode reabrir a avaliação do candidado através dos botões a seguir. Clicando em <b class="blue-text uppercase">Mesmo avaliador</b> você reenviará o formulário do candidado para o atual avaliar, afim de que o mesmo possa corrigir eventuais falhas. 
                    Para enviar o processo para um avaliador diferente, utilize o botão <b class="orange-text uppercase">Outro avaliador</b>. </p>

                <button class="btn waves-effect waves-light blue " type="submit" name="detalhes"> Mesmo avaliador </button>
                <button class="btn waves-effect waves-light orange " type="submit" name="detalhes"> Outro avaliador </button>



            </section>

        </main>

        <?php
        include("rodape_aeri.php");
        include("scripts.php");
        ?>

    </body>

</html>