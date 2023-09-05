<div class="titulo">Switch</div>
<form action="#" method ="post">
    <div>
        <label for="t1">Categoria</label>
            <select name="t1" id="t1">
                <option value="luxo">luxo</option>
                <option value="suv">suv</option>
                <option value="sedan">sedan</option>
                <option value="popular">popular</option>
                
            </select>
    </div>
     <br>
    <button>Executar</button>
</form>
<?php

$categoria=$_POST['t1'];

switch($categoria){
    case 'luxo':
        $carro='mercedes';
        $preco=250000;
        break;
    case 'suv':
        $carro='renegade';
        $preco=80000;
        break;
    case 'sedan':
        $carro='etios';
        $preco=55000;
        break;
    case 'popular':
        $carro='mobi';
        $preco=33000;
        break;
    default:
        $carro='';
        $preco=0;
        break;
}
$precoformatado=number_format($preco,2, ',' ,'.');
echo "<p>categoria: $categoria<br> carro: $carro <br>valor: R$ $precoformatado</p>";
?>
<p><h3> desafio case</h3></p>
<div class="titulo">Desafio Switch</div>
<form action="#" method ="post">
    <div>
            <input type ="text" name="param">
            <select name="conversao" id="conversao">
                <option value="kmmilha"> KM- MILHA</option>
                <option value="milhakm">MILHA- KM</option>
                <option value="mkm">M- KM</option>
                <option value="kmm">KM- M</option>
                <option value="cf">Celsius-Farenheit</option>
                <option value="fc">Farenheit-Celsius</option>
            </select>
            <br>
            <button>Calcular</button>
    </div>

    <?php
    $valor=$_POST['param'];
    $tipocv=$_POST['conversao'];
    $fatorconnversaotempertura=0.55;
    $fatorconnversaomilhkm=0.625;
    $fatorconnversaometrokm=1000;

    switch($tipocv){
        case 'kmmilha':
            $conversao=$valor*$fatorconnversaomilhkm;
            $unidade1='quilometro(s)';
            $unidade2 =  'milha(s)';
            break;
        case 'milhakm':
            $conversao=$valor/$fatorconnversaomilhkm;
            $unidade1='milha(s)';
            $unidade2 =  'quilometro(s)';
            break;
        case 'mkm':
            $conversao=$valor/$fatorconnversaometrokm;
            $unidade1='metro(s)';
            $unidade2 =  'quilometro(s)';
            break;
        case 'kmm':
            $conversao=$valor*$fatorconnversaometrokm;
            $unidade1='quilometro(s)';
            $unidade2 =  'metro(s)';
            break;
        case 'cf':
            $conversao=($valor*(1/$fatorconnversaotempertura))+32;
            $unidade1='graus celsius';
            $unidade2 =  'graus Farenheit';
            break;
        case 'fc':
            $conversao=($valor-32)*$fatorconnversaotempertura;
            $unidade1='graus Farenheit';
            $unidade2 =  'graus celsius';
            break;
        default:
            echo "nada a converter";
    }

    echo "<br>valor $valor $unidade1 convertido em  $unidade2 e igual a $conversao $unidade2";


    
   