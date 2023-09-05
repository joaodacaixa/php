<div class="titulo">Atribuicoes</div>

<?php

$title ='atribuicoes';
$numero=10;echo'<br>'.$numero;
$numero =$numero-3;
echo '<br>' .$numero;

$numero=$numero+1.5;
echo '<br>' .$numero;
$numero--;
echo '<br>' .$numero;

$numero++;
echo '<br>' .$numero;

$numero-=3;
echo '<br>' .$numero;
$numero+=3;
echo '<br>' .$numero;
$numero*=10;
echo '<br>' .$numero;
$numero/=10;
echo '<br>' .$numero;
$numero%=3;
echo '<br>' .$numero;
$numero**=2;
echo '<br>' .$numero;
$numero .=12345;//concatenacao;
echo '<br>' .$numero;

$texto='esse e um texto';
echo '<br>' .$texto;
$texto=$texto.' qualquer';
echo '<br>' .$texto;
$texto.=' de verdade';

echo '<br>' .$texto;

//$varivelinexistente ='valor inexistente';
echo '<br>' .$varivelinexistente;
var_dump($varivelinexistente);
$valor  =  $varivelinexistente??'valor default'; // atribuindo vaalor pdraao paraa variaavel sem valor
echo '<br>'.$valor;