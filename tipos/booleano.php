<div class="titulo">booleano</div>

<?php

echo TRUE; // retorna 1 no browser
echo '<br>';
echo  FALSE; // nada aaprece no browser

echo '<br>'. var_dump(true);
echo '<br>'. var_dump(false);
echo '<br>';

// regras de conversaoo

echo '<p> regras:</p>';
echo '<br>'. var_dump((bool) 0); // so zero retorna falso
echo '<br>'. var_dump((bool) 20); // so zero retorna falso
echo '<br>'. var_dump((bool) -10); // so zero retorna falso
echo '<br>'. var_dump((bool) 0.0); // so zero retorna falso
echo '<br>'. var_dump((bool) ""); // so string vaziaa retorna falso
echo '<br>'. var_dump((bool) "0.001"); // so atring vazia retorna falso

