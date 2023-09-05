<div class="titulo">Args e funcões</div>

<?php
function palindromo($palavra){
    $ultimoindice=strlen($palavra)-1;
    
    for ($i=0;$i<=$ultimoindice;$i++){
        if ($palavra[$i]!== $palavra[$ultimoindice-$i]){
            return 'Nao';
        }
    }
    return 'sim';
}

echo palindromo('arara').'<br>';
echo palindromo('bola').'<br>';

function outra($palavra){
    return $palavra===strrev($palavra)?'é':'não é';

}
$arara='arara';
echo "A palavra $arara ".outra($arara).' palindromo<br>';
$bola='bola';
echo "A palavra $bola ".outra($bola).' palindromo<br>';
