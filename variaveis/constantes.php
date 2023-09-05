<div class="titulo">Constantes</div>

<?php

define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;
const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$valorvariavel = 2.8;
define('NOVISSIMA_TAXA', $valorvariavel);

echo '<br>' . NOVISSIMA_TAXA . 'define gera constntes atrves de variveis ou valores literais';

const TAXA_CONST=2.8+1.2;
echo '<br>'. TAXA_CONST . 'para definir contante via const so com valores literais';


