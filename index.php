<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.google.com/css?family=Oswald:200,300,400,500,600,700" rel  ="stylesheet">
    <link rel="stylesheet" href="assets\css\estilo.css">
    <title>Curso PhP</title>
</head>
<body>
    <header  class ="cabecalho">
        <h1>Curso PhP</h1>
        <H2>Indice de exercicios</H2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3> Módulo 01 </h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Ola PhP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=html">Integracao Html</a></li>  
                        <li><a href="exercicio.php?dir=basico&file=css">Integracao css</a></li> 
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Comentarios em  PHP</a></li> 
                        <li><a href="exercicio.php?dir=basico&file=desafio">Desafio do modulo</a></li> 
                    </ul>
                </div>
                <div class="modulo amarelo">
                    <h3> Módulo 02 </h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">inteiro</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=float">float</a></li>  
                        <li><a href="exercicio.php?dir=tipos&file=operacoes">operacoes</a></li> 
                        <li><a href="exercicio.php?dir=tipos&file=string">String</a></li> 
                        <li><a href="exercicio.php?dir=tipos&file=booleano">booleano</a></li> 
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3> Módulo 03 </h3>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=basico">basico</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio">desafio equacao</a></li>  
                        <li><a href="exercicio.php?dir=variaveis&file=atribuicoes">atribuicoes</a></li> 
                        <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolacao</a></li> 
                        <li><a href="exercicio.php?dir=variaveis&file=variaveisvariaveis">Variaveis variaveis</a></li> 
                        <li><a href="exercicio.php?dir=variaveis&file=vlref">Valor vs referencia</a></li> 
                        <li><a href="exercicio.php?dir=variaveis&file=constantes">Constantes</a></li> 
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3> Módulo 04 </h3>
                    <ul>
                    <li><a href="exercicio.php?dir=estruturas_de_controle&file=ifelse">Estrutura If/Else</a></li>
                    <li><a href="exercicio.php?dir=estruturas_de_controle&file=ifelse">operadores Relacionais</a></li>
                    <li><a href="exercicio.php?dir=estruturas_de_controle&file=ifelse">operadores logicos</a></li>
                    <li><a href="exercicio.php?dir=estruturas_de_controle&file=getpost">Get/Post</a></li>
                    <li><a href="exercicio.php?dir=estruturas_de_controle&file=array">Array</a></li>
                    <li><a href="exercicio.php?dir=estruturas_de_controle&file=ifelse">Operador Ternario</a></li>
                    <li><a href="exercicio.php?dir=estruturas_de_controle&file=switch">Switch</a></li>
                    
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3> Módulo 05 </h3>
                    <ul>
                    <li><a href="exercicio.php?dir=array&file=array">Array</a></li>
                    <li><a href="exercicio.php?dir=array&file=mapa">Mapa</a></li>
                    <li><a href="exercicio.php?dir=array&file=operacoes">Operacoes</a></li>
                    <li><a href="exercicio.php?dir=array&file=multidimensionais">multidimensionais</a></li>
                    <li><a href="exercicio.php?dir=array&file=post">$_POST</a></li>
                    <li><a href="exercicio.php?dir=array&file=comparacao">Comparacao</a></li>
                    </ul>
                </div>   <div class="modulo verde2">
                    <h3> Módulo 06 </h3>
                    <ul>
                    <li><a href="exercicio.php?dir=estruturas_de_controle2&file=for">For</a></li>
                    <li><a href="exercicio.php?dir=estruturas_de_controle2&file=foreach">Foreach</a></li>
                    <li><a href="exercicio.php?dir=estruturas_de_controle2&file=continue">Break/Continue</a></li>
                    <li><a href="exercicio.php?dir=estruturas_de_controle2&file=while">While/Do While</a></li>
                    <li><a href="exercicio.php?dir=estruturas_de_controle2&file=tabeladinamica">Tabela Dinamica</a></li>
                    </ul>
                </div>
                <div class="modulo verde2">
                    <h3> Módulo 07 </h3>
                    <ul>
                    <li><a href="exercicio.php?dir=orientacaoobjeto&file=argsfunc">Args e funcoes</a></li>
                    <li><a href="exercicio.php?dir=orientacaoobjeto&file=argvar">Args Variaveis</a></li>
                    <li><a href="exercicio.php?dir=orientacaoobjeto&file=argpadrao">Args padrao</a></li>
                    
                </ul>
                </div>
            </nav>  
        </div> 
        
    </main>
    <footer class="rodape">
        COD3R & ALUNOS <?= date ('Y'); ?> 
    </footer>
</body>
</html>