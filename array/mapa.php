<div class="titulo">Mapa</div>

<?php

$dados=array(
    "idade" =>24,
    "cor"=>"verde",
    "peso"=>49.8

);

print_r($dados);

echo '<br>' . $dados["cor"];
echo '<br>';
$dados[]="usuario";
echo '<br>';
print_r($dados);
echo '<br>'.  'ATE AQUI';
$dados["dia"]="06";
echo '<br>';
print_r($dados);

?>


<div><h2> Desafio Meses </h2></div>

<?php

$meses = array(
    1=>"jan",
    "fev",
    "mar",
    "abr",
    "mai",
    "jun",
    "jul",
    "ago",
    "set",
    "out",
    "nov",
    "dez"
);

print_r($meses);
echo '<br>' .$meses[7];

