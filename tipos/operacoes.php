<div class="titulo">Operações</div>
<?php

echo 1+1;
echo '<br>';
var_dump(1+1);
echo '<br>';
var_dump(1+1.0);
echo 1+2.5;
echo '<br>';
echo 10-2;
echo '<br>';
echo 2*5;
echo '<br>';
echo  7/4;
echo '<br>';
echo intdiv(7,4);//divide e da o valor inteiro
echo '<br>';
echo round(7,4);// arredonda
echo '<br>';
echo 7%4; //modulo
echo '<br>';
echo 2**3;

//  precedencia ()  **  / * %  + -

echo '<p> Precedencia<p>';
echo '<br>';
echo 2+3 *4;
echo '<br>';
echo (2+3)*4;
echo '<br>';
echo  2+3*4**2;
echo '<br>';
echo ((2+3)*4)**2;
echo '<br>';
echo '<br>';
echo '<p> qual valor da expressao abaixo?</p>';
echo '<p> 2+5*3+(12/6)/(-8+2**3)','<br>';
echo 2+5*3+(12/6)/(-7+2**3);

echo '<p> qual expressao imprime 100?</p>';
echo '(a) (1+2)*20+15    ', (1+2)*20+15,'<br>';
echo '(b) 4*5**2   ', 4*5**2,'<br>';
echo '(c) 2**3**4/1e25    ' , 2**3**4/1e25;

