<div class="titulo">Foreach</div>
<?php
$dias =[1=>'seg','ter','qua','qui','sex','sab','dom'];
foreach($dias as $valor){
    echo  "$valor<br>";
}

foreach($dias as   $indice=>$valor){
    echo "$indice => $valor  <br>";
}

$h=[
    ['a','e','i'],
    ['o','u']
];

foreach($h as  $vor){
    echo  "$vor";
}
echo '<br>';

foreach($h as  $vor){
    foreach($vor as  $cada){
        echo "$cada, ";
    }
}
echo '<br>';
$numeros =[1,2,3,4,5];
foreach($numeros as $dobrar){// sem o & nao altera a array original
    $dobrar*=2;
    echo "$dobrar, ";
}
echo '<br>';
print_r($numeros);

echo '<br>';
$numeros =[1,2,3,4,5];
foreach($numeros as &$dobrar){ // com o & altera a array original, pois mexe no &ndereco de memoria onde esta o dado da array
    $dobrar*=2;
    echo "$dobrar, ";
}
echo '<br>';
print_r($numeros);

