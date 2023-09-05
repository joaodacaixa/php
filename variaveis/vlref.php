<div class="titulo">Valor vs refencia</div>
<?php

$variavel='valor inicial';
echo  $variavel;

//aatribuicao por valor
$variavelvaalor=$variavel;

echo "<br> $variavelvaalor";
$variavelvaalor='noovo valor';
echo "<br>  $variavel";
echo "<br>  $variavelvaalor";

// atribuicao por referencia
$variavelreferencia =&$variavel;
$variavelreferencia='mesma referencia';

echo "<br> $variavel $variavelreferencia";
