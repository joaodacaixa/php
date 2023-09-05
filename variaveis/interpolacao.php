<div class="titulo">Interpolacao</div>
<?php

$numero =10;
echo  $numero;

echo  '<br> $numero';   //  c spas simples nao interpola
echo "<br> $numero";

$texto ="a sua nota e: $numero"; // c aspas duplas interpola

echo "<br>$texto";

$objeto ='caneta';

echo "<br> eu tenho 5 $objetos";  // entende como um variavel diferente e nao retorna valor
echo "<br> eu tenho 5 {$objeto}s."; // resolve a vriavel na sentenca e retorna o valor e continua a sentenca
echo "<br> eu tinha 5 { $objeto}s mas perdi 3 {$objeto }s "; // dessa forma as {} parecem em rzao do espaco entre a { e a variavel
