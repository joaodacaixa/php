<div class="titulo">For</div>

<?php
for ($i=1; $i<= 5 ; $i++) {
    echo "$i, ainda nao é maior que 5 <br>";
}       

for (;$i<=10;$i++){
    echo "$i, ainda nao é maior que 10 <br>"; 
}

for(;$i<=15;){
    echo "$i, e continua ate 15<br>";
    $i++;
}

$dias =['seg','ter','qua','qui','sex','sab','dom'];
print_r($dias);
echo '<br>';
for($j=0;$j<=(count($dias));$j++){
    echo "{$dias[$j]}<br>";
}
echo '<br>';
$h=[
    ['a','e','i'],
    ['o','u']
];

for ($i=0;$i<count($h);$i++){
    echo "{$h[$i]}<br>";
}
echo '<br>';
for ($i=0;$i<count($h);$i++){
    for ($j=0;$j<count($h[$i]);$j++){
        echo "{$h[$i][$j]} ";
    }
}
?>
<h2>Desafio</h2>

<?php
$array=['#','##','###','####','#####'];
for ($i=0;$i<count($array);$i++)
{
    echo "{$array[$i]}<br>";
}

echo '<br>';

$impressao='';

for($cont=1;  $cont<=5;$cont++){
    $impressao.="#";
    echo "$impressao<br>";
}

echo '<br>';

for ($iimpressoa2 ='#';
    $iimpressoa2!=='######';
    $iimpressoa2.='#'){
        echo "$iimpressoa2<br>";
    }


