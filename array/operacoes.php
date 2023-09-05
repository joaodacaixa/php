<div class="titul">Operacoes</div>

<?php
$dados1= [
    "nome"  => "jose",
    "idade" => 28
];

$dados2 =[
    "naturalidade" => "fortaleza"
];

$dadoscompletos = $dados1+$dados2;
print_r($dadoscompletos);

echo   '<br>'. is_array($dadoscompletos);
echo   '<br>'. count($dadoscompletos);
echo '<br>';
$indice=array_rand($dadoscompletos);
echo "$indice= $dadoscompletos[$indice]";
echo '<br>';
echo  "${dadoscompletos['idade']}";//ou
echo '<br>';
echo  "{$dadoscompletos['idade']}";

echo '<br>';

unset($dadoscompletos["nome"]);
print_r($dadoscompletos);
//unset($dadoscompletos);  esvazia a array por completo   
echo '<br>';

$impares=[1,3,5,7,9];
$pares=[0,2,4,6,8];

$decimais =$pares+$impares;//ira apenas mostrar o grupo do pares- pois a preferencia e dos indices da 1 arraay
print_r($decimais);
echo '<br>';
$decimais=array_merge($pares,$impares); //junta os arrays sem ordenar, 1o array e 2a array  na sequecni
print_r($decimais);
echo '<br>';
sort($decimais); // indexa a array e ordena os valores;
print_r($decimais);
?>

<div> Desafio Sorteio</div>

<?php
$nomes=["Elza","Rapunzel","Branca de neve","Cinderela"];
$sorteio=array_rand($nomes);
echo "<h1 center> A princesa sorteada foi $nomes[$sorteio]</h1>";
?>

<style>
    [center]{
        display:flex;
        justify-content:center;
    }
</style>