<div class="titulo">variaveis variaveis</div>
<?php

$a = 'valorA';

$$a='valorAA';
echo"$a {$$a}";

echo '<br>';

$epa='opa';
$opa='vish';  
$vish='eita';
echo '<br>';
echo "$epa {$$epa} {$$$epa}";
echo '<h3> Desafio</h3>';

$a='nossaa';
$nossaa='eu';
$eu='consegui';
$consegui='responder';
$responder='esse';
$esse='desafio';
echo "<br> $a! {$$a} {$$$a} {$$$$a} {$$$$$a} {$$$$$$a}.";

