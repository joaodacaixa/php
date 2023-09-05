<div class="titulo">String</div>


<?php

echo 'eu sou uma string';
echo '<br>';
var_dump("eu tambem");
echo '<br>';

// concatenacaoo 

echo 'nos tambem '. 'somos!';
echo '<br>';
echo ("numero e ". 1123);
echo '<br>';
echo 'teste '."teste ". "'teste' ". '"teste  "'. '\'teste\'' . "\"teste\"";

print("<br>imprime na tela");
print "<br>imprime na tela";

// aalgumas funcoes

echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucwords('primeirs letras em maiusculo');
echo '<br>' . ucfirst('so a primeira letra em maiusculo');
echo '<br>' . strlen('quantas letras');
echo '<br>' . mb_strlen('u também');
echo '<br>' . substr('so uma parte da string',7,6);
echo '<br>' . str_replace ('isso','aquilo', 'trocar isso isso');
echo '<br>';
echo '<h2> desafio </h2>';

echo '<h3> avaliando os metodos da string, quaal metodos que a posicao ddo exto "abc" nn string "!AbcaBcabc" retorne 1</h3>';
echo '<br>';

echo strpos('!AbcaaBcabc','abc') .'<br>'; 
echo stripos('!AbcaaBcabc','abc') .'<br>';
