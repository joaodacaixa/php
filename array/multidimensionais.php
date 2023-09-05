<div class="titulo">Multidimensionais</div>
<?php
$dados= [
    [
    "nome"=>"robberto",
    "idade"=>20,
    "natural"=>"SP"
    ],
    [
    "nome"=>"maria",
    "idade"=>30,
    "natural"=>"RJ"
    ],
];

print_r($dados);

echo'<br>';

echo '<br>'.$dados[0]['idade'];
echo '<br>'.$dados[1]['idade'];

$dados[]=["nome"=>"miau",
"idade"=>1,
"natural"=>"BA"];//adiciona nova array a array dados

$dados[2]["vizinho"]="Puma"; //adiciona novo inddice com nome vizinho e valor puma apenas a array  de indice  2

echo '<br>';
print_r($dados);

echo '<br>';
print_r($dados[2]);