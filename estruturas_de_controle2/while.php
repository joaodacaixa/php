<div class="titulo">While/Do while</div>

<?php

const vl=5;
$contadora=0;

while($contadora < vl) {
    echo "$contadora, ";
    $contadora++;# code...
}
echo '<br>';
$contadorb=0;

do {
    echo "$contadorb, ";
    $contadorb++;
} while($contadorb<vl);



$contador=0;
echo '<br>';

//comparacao com for
for (;$contador<vl;$contador++){ 
    
    echo " $contador ,";
}


echo '<h2>Desafio Tabelas</h2>';

$matriz =[
    ['01','02','03','04','05'],
    ['06','07','08','09','10'],
    ['11','12','13','14','15'],
    ['16','17','18','19','20'],
];

foreach ($matriz as $linha){
    foreach($linha as $valor){
        echo "$valor ";
    }
    echo '<br>';
}

?>

<table>
    <?php
        foreach($matriz as $linhas){
            echo '<tr>';
            foreach ($linhas as $valor){
                echo "<td>$valor</td>";
            }
            echo '</tr>';
        }
     ?>
</table>

<br>

<table>
    <?php
        foreach($matriz as $index=>$linha){
            $style=$index%2===1 ? 'background-color:lightblue;':'';
            //if ($index%2!1==0){
            //    $style.='background-color:lightblue;';
            //}
            
            echo "<tr style='{$style}'>";
            foreach ($linha as $valor){
                echo "<td>$valor</td>";
            }
            echo '</tr>';
        }
     ?>
</table>

<style> 
    table{
        border:1px solid #444;
        border-collapse:collapse;
        margin:20px 0px;
    }

    table tr{
        border:1px solid #444;
    }

    table td{
        padding :10px 20px;
    }

</style>