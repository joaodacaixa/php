<div class="titulo">Argumentos Variaveis</div>

<?php
function somacompleta(...$numeros){
    $soma=0;
    foreach($numeros as $num){
        $soma+=$num;
    }
    return $soma;
}

echo somacompleta(1,2,3,4,5);
$array = [6,7,8];
echo '<br>'. somacompleta(...$array);

function  membros($titular,...$dependentes){
    echo "Titular: $titular <br>";
    if ($dependentes){
        foreach ($dependentes   as $dep){
            echo "dependente: $dep<br>";
        }
    }
    if ($dependentes=='') {
        echo "dependente inexistente";
    }
}

echo '<br>';
membros("ana","paullo","joa","maaria");
echo '<br>';
membros("paula",'');