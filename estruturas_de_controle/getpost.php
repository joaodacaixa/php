<div class="titulo">Get & Post  -desafio</div>

<form action="#" method ="post">
    <div>
        <label for="t1">Trabalho 1 (terca)</label>
            <select name="t1" id="t1">
                <option value="1">executado</option>
                <option value="2">nao executado</option>
            </select>
    </div>
    <br>
    <div>
        <label for="t2">Trabalho 2 (quinta)</label>
            <select name="t2" id="t2">
                <option value="1">executado</option>
                <option value="2">nao executado</option>
            </select>
    </div>
    <br>
    <button>Executar</button>
</form>

<?php
$t1= $_POST['t1'];
$t2= $_POST['t2'];

//echo $t1 .'<br>'. $t2;



if ($t1==1 && $t2==1){
    echo "trabalhos relizados -  tv de 50 pol e sorvete garantidos";
} else if ($t1!=1 && $t2!=1){
    echo "ficar em casa!";
} else{
    if ($t1!=1){
        echo  'trabalho de terca nao foi relizado-  tv de 37 pol e sorvete garantidos';
    }else{
        echo 'trabalho de quinta no foi realizado-  tv de 37 pol e sorvete garantidos';
    }
}