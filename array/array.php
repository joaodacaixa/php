<div class="titulo">Array</div>

<?php

$lista=array(1,2,3.4,"texto");

echo $lista.'<br>'; //imprime o tipo davariavel - array
echo  '<br>';
var_dump($lista); //imprime o indice o tipo  e o  valor de   cada item da array//imprime o indice o tipo  e o  valor de todo  item da array

echo '<br>';
echo '<br>';
print_r($lista); //imprime o indice o tipo  e o  valor de todo item da array
echo '<br>';
echo '<br>'.  $lista[0];//imprime o valor na posiicao 0 da  array
echo '<br>'.  $lista[1];
echo '<br>'.  $lista[2];
echo '<br>'.  $lista[3];
echo '<br>';
$texto='esse é um texto de teste';//uma  string e uma array de caracteres,logo podemos pegar letras d mesma forma q listmoos o conteudo de uma array
echo '<br>'.  $texto[0];
echo '<br>'.  $texto[3];
echo '<br>'.  $texto[10]; //cuidado, com ese metodo de retorno caracteres acentuados sao visto pelo php como 2 caracteres o que pode gerar um retorno diferente do esperado, ideal usar mb_substr
echo '<br>';
var_dump($texto[10]);
echo '<br>'.  mb_substr($texto,10,1);
