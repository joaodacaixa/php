<div class="titulo">arg padrao</div>
<?php

function saudacao($nome ='Senhor(a)', $sobrenome  = 'cliente'){
    return "bem vindo,  $nome  $sobrenome!<br>";

}
echo saudacao();
echo saudacao(null);
echo saudacao(null,null);
echo saudacao('mestre','supremo');

function anotarpedido ($comida,$bebida='agua'){
    echo "para  comer :$comida  <br>";
    echo "para beber :$bebida  <br>";
}

anotarpedido('hmburguer');
anotarpedido('piizza','refrii');

function sm($a,$b){
    echo " soma de $a + $b = ";
    return  $a+$b;
}
function sme(int $a, int $b){
    echo " soma de $a + $b = ";
    return  $a+$b;
}
function sms($a,$b):int{
    echo " soma de $a + $b = ";
    return  $a+$b;
}
echo 'sem defiinir tipo dentro d funcao <br>';
echo sm(1,2).'<br>';
echo sm(1.5,1.7).'<br>';
echo sm(1,'4cinco').'<br>';


echo 'defiininnd tipo na entrada <br>';
echo sme(1,2).'<br>';
echo sme(1.5,1.7).'<br>';
//echo sme(1,'4cinco').'<br>';

echo 'defiininnd tipo na saida <br>';
echo sms(1,2).'<br>';
echo sms(1.5,1.7).'<br>';
echo sms(1,'4cinco').'<br>';

$soma = function ($a,$b){return  $a+$b;};

echo $soma(1,4).'<br>';

function executar($a,$b,$op,$fc){
    $resultdo =$fc($a,$b);
    echo "$a $op $b = $resultdo <br>";
}
$mt =  function($a,$b){
    return $a*$b;
};

function divisao($a,$b){
    return $a/$b;
}
executar(2,3,'+',$soma);
executar(2,3,'*',$mt);
executar(9,3,'/',divisao);
