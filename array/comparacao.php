<div class="titulo">Comparacao</div>

<?php

$a=['nome'=>'mria','idade'=>20];
$b=['nome'=>'mria','idade'=>20];
var_dump($a==$b);
var_dump($a===$b);

$c =['idade'=>20, 'nome'=>'mria'];
echo '<br>';

var_dump($a==$c);
var_dump($a===$c);
echo '<br>';
$d =['idade'=>'20', 'nome'=>'mria'];

var_dump($a==$d);
var_dump($a===$d);