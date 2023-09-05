<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.google.com/css?family=Oswald:200,300,400,500,600,700" rel  ="stylesheet">
    <link rel="stylesheet" href="assets\css\estilo.css">
    <link rel="stylesheet" href="assets\css\exercicio.css">
    <title>Curso PhP</title>
</head>
<body class="exercicio">
    <header  class ="cabecalho">
        <h1>Curso PhP</h1>
        <H2>Visualizção de exercicios</H2>
    </header>
    <nav class="navegacao">
        <a href=<?="/{$_GET['dir']}/{$_GET['file']}.php"?> class="verde"> Sem formatacao </a>
        <a href="index.php" class  ="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                //include('basico/ola.php');
                //include($_GET['dir'] ."/teste.php");
                //include($_GET['dir'] . $_GET['file'] ".php")
                //include("{$_GET['dir']}/{$_GET['file']}.php");
                //include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
                  include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div> 
    </main>
    <footer class="rodape">
        COD3R & ALUNOS <?= date ('Y'); ?> 
    </footer>
</body>
</html>