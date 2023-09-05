<div class="titulo">Break/Continue</div>


<?php

$array=["AAA","BBB","CCC","DDD","EEE","FFF"];
print_r($array);
echo'<br>';
$f=count($array);
echo "$f";
$i=0;
for ($i=0;$i<count($array);$i++){
    if ($i%2===1){
        continue;
    }
    echo "<br>{$array[$i]}<br>";
}

foreach($array as $chave =>$valor){
    if ($chave %2!==0) continue;
    echo "<br>$valor<br>";
}
